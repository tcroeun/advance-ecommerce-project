@extends('frontend.main_master')
@section('frontend_content')
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br><br>
                <img class="card-img-top" style="border-radius:50%" src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" height="100%" width="100%">
                <br><br>
                <ul class="list-group list-group-flush">
                    <a href="{{url('/')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>  <!-- // end col md-2 -->
            <div class="col-md-2">

            </div>  <!-- // end col md-2 -->
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Change Password</span></h3>
                    <div class="card-body">                        
                        <form method="post" action="{{route('user.password.update')}}" class="register-form outer-top-xs" role="form">
                            @csrf
                            <div class="form-group">
                                <h5>Current Pasword<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="oldpassword" id="current_password" class="form-control" required="" autofocus>
                                </div>
                            </div>	
                            <div class="form-group">
                                <h5>New Password<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password" id="password" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Confirm Pasword<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required="">
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Change Password</button>
                            </div>              
                        </form>
                    </div>
                </div>
            </div>  <!-- // end col md-8 -->
        </div>  <!-- // end row -->
    </div>
</div>
@endsection