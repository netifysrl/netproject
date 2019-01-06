@extends('layouts.layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Contacts</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-success">Add contact</button>
            </div>
          </div>
        </div>

<div class="table-responsive">
  <table class="table table-striped table-sm" id="contactsTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name </th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)

      <tr>
        <td>
            <button type="button" class="btn btn-sm btn-outline-success">{{$contact->id}}</button>
        </td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->surname}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>

      </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection
@section('pagescript')
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function(){
            $('#contactsTable').dataTable();
        });
</script>
@stop
