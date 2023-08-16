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
              <li class="breadcrumb-item"><a href="{{ route('departments.index') }}">All Employees</a></li>
              <li class="breadcrumb-item active" aria-current="page">
              <a href="{{ route('departments.create') }}">Add New</a></li>
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
                    <th>Dnumber</th>
                    <td>{{ $data->dno }}</td>
                </tr>
                <tr>
                    <th>Dname</th>
                    <td>{{ $data->dname }}</td>
                </tr>
                <tr>
                    <th>Employees</th>
                    <td>
                        <ul>
                            @forelse ($data->employees as $emp)
                                <li>{{ $emp->fname }}</li>
                            @empty
                                <li>no data</li>
                            @endforelse
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
      </div>
  </div>
  @endsection
