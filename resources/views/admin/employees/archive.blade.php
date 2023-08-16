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
                @if(Session::has('msg'))
                    <div class="alert alert-success">{{ Session::get('msg') }}</div>
                @endif
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
                            <th>SSN</th>
                            <th>Fullname</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($data as $value)
                        <tr>
                            <td>{{ $value['SSN'] }}</td>
                            <td>{{ $value['fname']." ".$value['lname']}}</td>
                            <td>{{ $value['dno'] }}</td>
                            <td>
                                <form action="{{ route('employees.restore',$value['SSN']) }}" method="post" style="display: inline-block">
                                    @csrf
                                    <input type="submit" value="restore" class="btn btn-success">
                                </form>
                                <form action="{{ route('employees.deleteArchive',$value['SSN']) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form>
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
                          <th>Fullname</th>
                          <th>Department</th>
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
