@extends('layouts.layout')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
          </div>
        </div>

        {{-- Start Dashboard --}}

        {{-- Projects Parts --}}

        <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="dash-box dash-box-color-1">
                 {{-- <div class="dash-box-icon">
                  </div>--}}
                  <div class="dash-box-body">
                    <span class="dash-box-count">{{$tot_projects}}</span>
                    <span class="dash-box-title">Total projects</span>
                  </div>
                  
                 {{--<div class="dash-box-action">
                    <button>More Info</button>
                  </div>--}}				
                </div>
              </div>
              <div class="col-md-4">
                <div class="dash-box dash-box-color-2">
                  {{--<div class="dash-box-icon">
                  </div>--}}
                  <div class="dash-box-body">
                    <span class="dash-box-count">{{$open_projects}}</span>
                    <span class="dash-box-title">Open projects</span>
                  </div>
                  
                  {{--<div class="dash-box-action">
                    <button>More Info</button>
                  </div>--}}				
                </div>
              </div>
              <div class="col-md-4">
                <div class="dash-box dash-box-color-3">
                  {{--<div class="dash-box-icon">
                  </div>--}}
                  <div class="dash-box-body">
                    <span class="dash-box-count">{{$close_projects}}</span>
                    <span class="dash-box-title">Close projects</span>
                  </div>
                  
                  {{--<div class="dash-box-action">
                    <button>More Info</button>
                  </div>--}}				
                </div>
              </div>
            </div>

            {{-- Deals Part --}}
                <div class="row">
                  <div class="col-md-4">
                    <div class="dash-box dash-box-color-4">
                     {{-- <div class="dash-box-icon">
                      </div>--}}
                      <div class="dash-box-body">
                        <span class="dash-box-count">{{$idle_deals}}</span>
                        <span class="dash-box-title">Idle deals</span>
                      </div>
                      
                     {{--<div class="dash-box-action">
                        <button>More Info</button>
                      </div>--}}				
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="dash-box dash-box-color-2">
                      {{--<div class="dash-box-icon">
                      </div>--}}
                      <div class="dash-box-body">
                        <span class="dash-box-count">{{$open_deals}}</span>
                        <span class="dash-box-title">Open deals</span>
                      </div>
                      
                      {{--<div class="dash-box-action">
                        <button>More Info</button>
                      </div>--}}				
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="dash-box dash-box-color-3">
                      {{--<div class="dash-box-icon">
                      </div>--}}
                      <div class="dash-box-body">
                        <span class="dash-box-count">{{$close_deals}}</span>
                        <span class="dash-box-title">Close deals</span>
                      </div>
                      
                      {{--<div class="dash-box-action">
                        <button>More Info</button>
                      </div>--}}				
                    </div>
                  </div>
                </div>


          </div>




{{-- <canvas class="my-4 w-100" id="chart-area" width="900" height="380"></canvas> --}}
@stop

@section('pagescript')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="/js/dashboard.js"></script> --}}
@endsection
