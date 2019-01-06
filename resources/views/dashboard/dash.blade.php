@extends('layouts.layout')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>
<canvas class="my-4 w-100" id="chart-area" width="900" height="380"></canvas>
@stop

@section('pagescript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="/js/dashboard.js"></script>
@endsection
