@extends('admin.layouts.master')
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card card-primary">
      <div class="card-header">
        <h4>Language</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.language.create') }}" class="btn btn-primary">
            Create New
          </a>
        </div>
      </div>
      <div class="card-body">
        <p>Write something here</p>
      </div>
    </div>
</div>
@endsection
