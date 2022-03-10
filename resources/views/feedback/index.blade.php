@extends('layouts.admin_layout.admin_layout')

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Feedback Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Feedback</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Feedbacks</h3>
                                
                            </div>
                            <div class="card-body">
                                <table id="story" class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <!-- <th>Actions</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($feedback as $feedback)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $feedback->email }}</td>
                                            
                                            <td>{{ $feedback->message }}</td>
                                            <!-- <td>
                                                <a onclick="return confirm('Are you sure want to delete this Subscription?')" style=" background-color: #14A2B8;"
                                                    href="{{url('/video/delete/'.$feedback->id)}}"
                                                    class="btn btn-color" role="button"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </td> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- ./wrapper -->


<!-- <script type="text/javascript">
function validateForm() {
    let x = document.forms["iterestForm"]["interestName"].value;
    if (x == "") {
        alert("Title must be filled out");

        return false;
    }
}

function editValidateForm() {
    let x = document.forms["iterest"]["interestName"].value;
    if (x == "") {
        alert("Title must be filled out");

        return false;
    }
} -->


<!-- </script> -->
@endsection