@extends('admin.layouts.master')
@section('content')
<div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Hi, Ujang!</h2>
    <p class="section-lead">
      Change information about yourself on this page.
    </p>

    <div class="row mt-sm-4">
     
      <div class="col-12 col-md-12 col-lg-6">
        <div class="card">
          <form method="post" class="needs-validation" action="{{ route('admin.profile.update', auth()->guard('admin')->user()->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">  
                    <div id="image-preview" class="image-preview ml-3 mb-3">
                        <label for="image-upload" id="image-label">Choose File </label>
                        <input type="file" name="image_url" id="image-upload">
                        <input type="hidden" name="old_image_url" id="image-upload" value="{{ $user->image_url }}">
                        @error('image_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row">                               
                  <div class="form-group col-md-6 col-12">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <input type="submit" class="btn btn-primary" value="Save Changes"/>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6">
        <div class="card">
          <form method="post" class="needs-validation" action="{{ route('admin.profile-password-update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="card-header">
              <h4>Password Update</h4>
            </div>
            <div class="card-body">
                <div class="row">                               
                  <div class="form-group col-md-6 col-12">
                    <label>Old Password</label>
                    <input type="text" class="form-control" name="current_password" />,
                    @error('current_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row">                               
                  <div class="form-group col-md-6 col-12">
                    <label>New Password</label>
                    <input type="text" class="form-control" name="password" />
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row">                               
                  <div class="form-group col-md-6 col-12">
                    <label>Confirmed Password</label>
                    <input type="text" class="form-control" name="confirmed_password"/>
                  </div>
                </div>
               
            </div>
            <div class="card-footer text-right">
              <input class="btn btn-primary" value="Save Changes" type="submit"/>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
@push('scripts')
  <script>
    $(document).ready(function(){
        $('.image-preview').css({
          "background-image" : "url({{ asset($user->image_url) }})",
          "background-size" : "250px",
          "background-repeat" : "no-repeat"
        })
    })
  </script>
@endpush