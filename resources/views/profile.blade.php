@extends('layouts.master') 
@section('dynamique')
<div class="card-content">
    <form method="post" action="{{url('ticket/'.Auth::user()->id)}}">
        <input type="hidden" name="_method" value="PUT"> {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group label-floating">
                    <label class="control-label">Email</label>
                    <input type="text" class="form-control" value="{{$e->email}}" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group label-floating">
                    <label class="control-label">Username</label>
                    <input type="text" class="form-control" name="name" value="{{$e->name}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" name="file_image" id="exampleFormControlFile1">
                    </div>                
            </div>
        </div>    
            <!--<div class="col-md-6">
                <div class="form-group label-floating">
                    <label class="control-label">Last Name</label>
                    <input type="text" class="form-control" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group label-floating">
                    <label class="control-label">Adress</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">City</label>
                    <input type="text" class="form-control" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">Country</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group label-floating">
                    <label class="control-label">Postal Code</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>About Me</label>
                    <div class="form-group label-floating">
                        <label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>-->
        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
        <div class="clearfix"></div>
    </form>
</div>
</div>

@endsection