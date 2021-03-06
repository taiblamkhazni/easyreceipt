<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Client;
use App\user;
use Auth;
use Search;
use Image;
use PDF;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	 
    //pour afficher les information de la base donne
    public function index(){
        if (Auth::user()->is_admin) {
            $listticket=Client::paginate(1);
        }else{
            $listticket=Client::where('user_id',Auth::user()->id)->paginate(1);
        }
        
        return view('user',['a'=>$listticket]);
    }
     public function pdf($id){
        $a=user::find($id);
        $pdf=PDF::loadView('pdf',['a'=>$a]);
        return $pdf->download('ticket.pdf');
    }

    /*public function create(){
    return view('image');
                            }

     //pour enregistrer dans la base donne
    public function store(Request $request){
        $cv=new user();
        if ($request->hasfile('fileimage')) {
           $cv->fileimage=$request->fileimage->store('public/image');
        }
       $cv->save();
        
        return redirect('ticket');

        
    }*/
    public function search(Request $request){
        if (Auth::user()->is_admin) {
             $listticket=Search::search(
                "Client" ,
                ['libelle' , 'tache'] ,
                $request->search  ,
                ['id' , 'libelle', 'tache','salaire','created_at'],
                ['id'  , 'asc'] ,
               true ,
               30 
            );
             return view('user',['a'=>$listticket]);
            }else{
        $listticket=Search::search(
                "Client" ,
                ['libelle' , 'tache'] ,
                $request->search  ,
                ['id' , 'libelle', 'tache','salaire','created_at'],
                ['id'  , 'asc'] ,
               false   
            )->where('user_id' , Auth::user()->id)->get();
          return view('user',['a'=>$listticket]);
      }
    }
    public function edit($id){
        if (Auth::user()->id==$id) {
            $a=user::find($id);
        return view('profile',['e'=>$a]);
        }else {
            return view('errors');
        }
        
    }

    public function update(Request $request,$id){
        $cv=user::find($id);
        $cv->name=$request->input('name');
         if ($request->hasfile('fileimage')) {
           $cv->fileimage=$request->file('fileimage')->store('public/image');
        }
        
        $cv->save();
        session()->flash('flash','les informations à été bien Modiffier !!');
        return redirect('ticket');
    }

    public function destroy($id=null){
        if ($id !=null) {
            $cv=Client::find($id);
            $cv->delete();
        }else if (request()->has('id')) {
            Client::destroy(request('id'));
        }
        session()->flash('flach','le ticket à été bien supprimer !!');    
            return redirect('ticket');
    }
    public function deelete(){
        $listticket=Client::onlyTrashed()->where('user_id',Auth::user()->id)->get();
        return view('delete',['a'=>$listticket]);
    }
    public function Codebarre(){
        return view('Codebarre');
    }
}
