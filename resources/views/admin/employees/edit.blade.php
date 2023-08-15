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
        @if(Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
        @endif
        <div class="card">
          <form class="form-horizontal" action="{{ route('employees.update',$data->SSN) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
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
                    class="form-control"
                    id="ssn"
                    placeholder="SSN Here"
                    name="ssn"
                    value="{{ $data->SSN }}"
                  />
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
                    value="{{ $data->fname }}"
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
                    value="{{ $data->lname }}"
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
                    value="{{ $data->email }}"
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
                      @if($data->gender == "m")
                      checked
                      @endif
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
                      @if($data->gender == "f")
                      checked
                      @endif
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
                    <option value="{{ $dept['dno'] }}"
                    @if($data->dno == $dept->dno)
                    selected
                    @endif
                    >{{ $dept['dname'] }}</option>
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
