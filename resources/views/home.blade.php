@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">DASHBOARD</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--  -->
                <!--  -->
               
                <!--  -->
                <div class="col-md-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$settingsCount}}</h3>

                            <h4>Settings</h4>
                        </div>
                        <div class="icon">
                            <i class="small material-icons">settings</i>
                        </div>
                        <a href="{{ url('settings') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


		<div class="col-md-6">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>{{$subscriptionCount}}</h3>

                            <h4>Subscriptions</h4>
                        </div>
                        <div class="icon">
                            <i class="small material-icons">settings</i>
                        </div>
                        <a href="{{ url('subscription') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                       

                            <h3>{{$notificationCount}}</h3>

				<h4>Notification</h4>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <a href="{{ url('notifications') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
               
                <!--  -->
            </div>
        </div>
    </section>
</div>
@endsection