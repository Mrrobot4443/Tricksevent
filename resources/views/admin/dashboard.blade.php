@extends('admin.layouts.app')
@section('card')
    Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-sm-6">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">ChartJS</span>
                    </div>
                </div>
                <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">ChartJS</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Line Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="lineChart_1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Bar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="barChart_1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Gradient Bar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="barChart_2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Stalked Bar Chart</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="barChart_3"></canvas>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->



@endsection
