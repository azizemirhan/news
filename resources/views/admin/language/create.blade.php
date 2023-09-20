@extends('admin.layouts.master')
@section('content')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card card-primary">
      <div class="card-header">
        <h4>Create Language</h4>
      </div>
      <div class="card-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>HTML5 Form Basic</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>language</label>
                        <select class="form-control">
                            <option>---Select---</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control">
                            <option>Active</option>
                            <option>InActive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Is Default</label>
                        <select class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
