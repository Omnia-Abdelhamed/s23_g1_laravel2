@extends('layouts.admin.master')
@section('title','Create Employee')
@section('bread-crumb')
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Projects</h4>
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
          <form class="form-horizontal" action="{{ route('employees.storeProjects') }}" method="post">
            @csrf
            <input type="hidden" value="{{ $ssn }}" name="ssn">
            <div class="card-body">
              <div class="form-group row">
                <label
                  for="fname"
                  class="col-sm-3 text-end control-label col-form-label"
                  >Projects</label
                >
                <div class="col-sm-9">
                  <select class="form-control" name="projects[]" multiple style="height: 150px">
                    @foreach ($data as $project)
                    <option value="{{ $project->pno }}">{{ $project->pno."-".$project->pname }}</option>
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
