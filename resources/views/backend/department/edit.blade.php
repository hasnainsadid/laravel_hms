@extends('backend.layouts.app')
@section('title', 'Edit Department')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Department</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('department.index')}}">View Department</a></li>
            <li class="breadcrumb-item active">Edit Department</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            {{-- Session Message --}}
            @if (session('msg'))
              <div class="alert alert-success">{{session('msg')}}</div>
            @endif

            <!-- form start -->
            <form method="post" action="{{route('department.update', $data->id)}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Department Name</label>
                  <input type="text" name="name" class="form-control form-control-border" id="exampleInputEmail1" value="{{$data->name}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="description" class="form-control form-control-border" id="exampleInputPassword1" value="{{$data->description}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select name="status" class="form-control form-control-border">
                    <option value="" selected disabled>Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-success m-auto d-block w-25">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection