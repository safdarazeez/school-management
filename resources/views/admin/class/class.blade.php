@extends('admin.layout')
@section('content')

  <div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-sm-6">
        <h1>class</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">class</li>
        </ol>
      </div>
      </div>
    </div>
    </section>

    <section class="content">
    <div class="container-fluid">
      <div class="row">

      <div class="col-md-12">
        @if(Session::has('success'))
      <div class="alert alert-success">
      {{ Session::get('success') }}
      </div>
      @endif
        <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">class</h3>
        </div>
        <form action="{{ route('class.store') }}" method="POST">
          @csrf
          <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
            placeholder="Enter your class">
          </div>
          @error('name')
        <p class="text-danger">{{ $message }}</p>
      @enderror
          </div>
          <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
      </div>
      </div>
    </div>
    </section>
  </div>
@endsection