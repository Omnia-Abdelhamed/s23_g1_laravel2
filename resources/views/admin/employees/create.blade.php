@extends('layouts.admin.master')
@section('title','Create Employee')
@section('bread-crumb')
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Students</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <a href="#">Add New</a></li>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  @endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
        @endif
        <div class="card">
          <form class="form-horizontal" action="{{ route('employees.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
            <div class="form-group row">
                <label
                  for="ssn"
                  class="col-sm-3 text-end control-label col-form-label"
                  >SSN</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control @error('ssn') is-invalid @enderror"
                    id="ssn"
                    placeholder="SSN Here"
                    name="ssn"
                  />
                  @error('ssn')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

              </div>
              <div class="form-group row">
                <label
                  for="fname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Fname</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="fname"
                    placeholder="First Name Here"
                    name="fname"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="fname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Lname</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="lname"
                    placeholder="Last Name Here"
                    name="lname"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="email"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Email</label
                >
                <div class="col-sm-9">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Email Here"
                    name="email"
                  />
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="image"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Image</label
                >
                <div class="col-sm-9">
                  <input
                    type="file"
                    class="form-control"
                    id="image"
                    placeholder="First Name Here"
                    name="image"
                  />
                </div>
              </div>
              <div class="form-group row">
              <label
                  for="email"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Gender</label
                >
                <div class="col-md-9">
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="customControlValidation1"
                      name="gender"
                      value="m"
                    />
                    <label
                      class="form-check-label mb-0"
                      for="customControlValidation1"
                      >Male</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="customControlValidation2"
                      name="gender"
                      value="f"
                    />
                    <label
                      class="form-check-label mb-0"
                      for="customControlValidation2"
                      >Female</label
                    >
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="fname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Department</label
                >
                <div class="col-sm-9">
                  <select class="form-control" name="dno">
                    @foreach ($deptData as $dept)
                    <option value="{{ $dept['dno'] }}">{{ $dept['dname'] }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="border-top">
              <div class="card-body">
                <button type="submit" class="btn btn-primary">
                  Add
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
  @endsection
