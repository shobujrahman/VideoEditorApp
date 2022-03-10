@extends('layouts.admin_layout.admin_layout')
@section('content')



<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
		        <div class="col-md-2">
		            <h1>Notifications</h1>
		        </div>
		    </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
               
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Notifications</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-remove"></i></button>
                    </div>
                </div>
               
                <form name="notificationForm" id="notificationForm" action="{{ url('/notifications/send')}}" method="post"
                    enctype="multipart/form-data">@csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                            		<input type="text" class="form-control" id="title" placeholder="Titlle" name="title"></input>
                                </div>
                            </div>
                                    <!-- -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                   	<label for="formGroupExampleInput1">Message</label>
                           			<textarea type="text" class="form-control" id="formGroupExampleInput1" placeholder="message" name="message"></textarea>
                                </div>
                            </div>
                                    <!-- -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                   	<label for="url">url</label>
                            		<input type="text" class="form-control" id="url" placeholder="https://www.google.com/" name="url"></input>
                                </div>
                            </div>
                                    <!-- -->
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label for="imageURl">Image Url</label>
                            		<input type="text" class="form-control" id="imageURl" placeholder=" https://xxxxxxxx.jpg/png/" name="image_url"></input>
                                </div>
                            </div>
                                    <!-- -->
                            
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!--  -->



@endsection

    
