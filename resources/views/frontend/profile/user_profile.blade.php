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
                    <h3 class="text-center"><span class="text-danger">Hi...</span><strong>{{Auth::user()->name}}</strong> Update Your Profile</h3>
                    <div class="card-body">
                        <form method="post" action="{{route('user.profile.store')}}" class="register-form outer-top-xs" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="name">Name</span>*</span></label>
                                <input type="text" id="name" name="name" class="form-control unicase-form-control text-input" value="{{$user->name}}" require autofocus>
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">Email</span>*</span></label>
                                <input type="email" id="email" name="email" class="form-control unicase-form-control text-input" value="{{$user->email}}" require>
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control unicase-form-control text-input" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">  
                            <label class="info-title" for="userimage">User Image</label>                              
                                <input type="file" id="profile_photo_path" name="profile_photo_path" class="form-control unicase-form-control text-input">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>  <!-- // end col md-8 -->
        </div>  <!-- // end row -->
    </div>
</div>
@endsection