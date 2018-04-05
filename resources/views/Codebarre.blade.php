 @extends('layouts.master') 
 @section('dynamique')
<style>
.row{
    margin:0px;
}
h2{
    margin-top:60px;
}
</style>
<div class="container">
   <div class="row">
   <div class="col-md-2">
    </div>
    <div class="col-md-4">
       <h2>your Code Barre :</h2>
    </div>
    <div class="col-md-4">
        </div>

   </div>
   <br>
   <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-6" >
            <div>{!! DNS1D::getBarcodeHTML(Auth::user()->id,'C128A') !!}</div>
        </div>
        <div class="col-md-4">
        
        </div>
   </div>
</div>

@endsection