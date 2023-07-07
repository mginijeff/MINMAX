 
@extends('layout_backend.main') 
 @section('content')
 
 <!-- Header-->

 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <!-- <span class="badge badge-pill badge-success">Success</span>  -->
                    Welcome back!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                          
                            <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> -->
                        </div>
                        <h4 class="mb-0">
                            <span class="count">104</span>
                        </h4>
                        <p class="text-light">Booked Materials</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!-- <canvas id="widgetChart1"></canvas> -->
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                          
                            <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> -->
                        </div>
                        <h4 class="mb-0">
                            <span class="count">104</span>
                        </h4>
                        <p class="text-light">Posted Business</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!-- <canvas id="widgetChart1"></canvas> -->
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                          
                            <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> -->
                        </div>
                        <h4 class="mb-0">
                            <span class="count">104</span>
                        </h4>
                        <p class="text-light">Clients</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <!-- <canvas id="widgetChart1"></canvas> -->
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            

                       
                       
    </div><!-- /#right-panel -->
    @endsection
