@extends('layouts.admin.master')
@section('title','All Employees')
@section('css')
<link
href="{{ URL::asset('assets/css/dataTables.bootstrap4.css') }}"
rel="stylesheet"
/>
@endsection
@section("bread-crumb")
<div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Employees</h4>
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
  @section("content")
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">All Employees</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                            <th>id</th>
                            <th>SSN</th>
                            <th>Fullname</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($data as $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value['SSN'] }}</td>
                            <td>{{ $value['Fullname'] }}</td>
                            <td>{{ $value['Department'] }}</td>
                            <td>
                                <a href="{{ route('employees.show',$value['SSN']) }}" class="btn btn-primary">show</a>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Data</td>
                            </tr>
                        @endforelse
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Page Content -->

@endsection
@section('js')
<script src="{{ URL::asset('assets/js/datatables.min.js') }}"></script>
<script>
  /****************************************
   *       Basic Table                   *
   ****************************************/
  $("#zero_config").DataTable();
</script>
@endsection
