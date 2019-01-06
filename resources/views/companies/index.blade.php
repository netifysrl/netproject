@extends('layouts.layout')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Companies</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-success">Add company</button>
            </div>
          </div>
        </div>

<div class="table-responsive">
  <table class="table table-striped table-sm" id="companiesTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Business name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Contact</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
            @foreach ($company->comm_contacts as $contact)

      <tr>
        <td>
            <button type="button" class="btn btn-sm btn-outline-success">{{$company->id}}</button>
        </td>
        <td>{{$company->business_name}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->phone}}</td>
        <td>{{$contact->name}}</td>

      </tr>
        @endforeach
      @endforeach
    </tbody>
  </table>
  {{ $companies->links() }}
</div>


@endsection
@section('pagescript')
{{-- <script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function(){
            $('#companiesTable').dataTable();
        });
</script> --}}
@stop
