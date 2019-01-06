@extends('layouts.layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Projects</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-success">Add project</button>
            </div>
          </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm" id="contactsTable">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name </th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Costumer</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($projects as $project)


                <tr>
                  <td>
                      <button type="button" class="btn btn-sm btn-outline-success">{{$project->id}}</button>
                  </td>
                  <td>{{$project->name}}</td>
                  <td>{{$project->description}}</td>
                  <td>{{$project->statuses->name}}</td>
                  <td>{{$project->companies->business_name}}</td>

                </tr>

                @endforeach
              </tbody>
            </table>
            {{ $projects->links() }}
          </div>




@endsection
@section('pagescript')
{{--<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function(){
            $('#contactsTable').dataTable();
        });
</script> --}}
@stop
