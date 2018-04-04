@extends('layouts.master') 
@section('dynamique')
 <div class="card-content">
    <form method="post" action="{{url('ticket')}}" enctype="multipart/form-data">
        {{csrf_field()}}
 <div class="row">
            <div class="col-md-6">
                        <div class="form-group">
                            <div>
                                <label>Update Profile Image:</label>
                            </div>
                            <div>
                            <img  width="100" hieght="100" src="/publics/images/{{Auth::user()->fileimage}}">
                            </div>
                            <input type="file" name="fileimage" class="form-control">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success upload-image" type="submit">Upload Image</button>
                        </div>
             </div>  
</div>
</form>
</div>
@endsection