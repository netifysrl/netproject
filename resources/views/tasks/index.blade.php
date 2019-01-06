@extends('layouts.layout')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tasks</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            {{--  <button type="button" class="btn btn-sm btn-outline-success">Add company</button> --}}
            </div>
          </div>
        </div>

<div class="table-responsive">
  <table class="table table-striped table-sm" id="companiesTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Status</th>
        <th>User</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)

      <tr>
        <td>
            <button type="button" class="btn btn-sm btn-outline-success">{{$task->id}}</button>
        </td>
        <td>{{$task->name}}</td>
        <td>{{$task->descriptionl}}</td>
        <td>{{$task->status_id}}</td>
        <td>{{$task->user_id}}</td>

      </tr>

      @endforeach
    </tbody>
  </table>
  {{ $tasks->links() }}
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
