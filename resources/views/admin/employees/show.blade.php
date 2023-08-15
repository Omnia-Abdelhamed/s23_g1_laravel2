@extends('layouts.admin.master')
@section('title','Create Employee')
@section('bread-crumb')
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Show Employee</h4>
        <div class="ms-auto text-end">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">All Employees</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <a href="{{ route('employees.create') }}">Add New</a></li>
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
        <div class="card">
            <table>
                <tr>
                    <th>SSN</th>
                    <td>{{ $data->SSN }}</td>
                </tr>
                <tr>
                    <th>Fname</th>
                    <td>{{ $data->fname }}</td>
                </tr>
                <tr>
                    <th>Lname</th>
                    <td>{{ $data->lname }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Created</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Updated</th>
                    <td></td>
                </tr>
            </table>
        </div>
      </div>
  </div>
  @endsection
