@extends('layouts.admin_layout.admin_layout')

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Videos Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Videos</li>
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
                                <h3 class="card-title">All Videos</h3>
                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                    style="max-width: 200px;  float:right; display:inline-block;">
                                    <i class="fas fa-plus-circle"> Video</i>

                                </button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Videos Create
                                                    Form
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form onsubmit="return validateForm()" name="videoForm"
                                                    id="videoForm" action="{{ url('/video/store') }}"
                                                    method="post" enctype="multipart/form-data">@csrf

                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="title">Title</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="title" id="title" placeholder="enter title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="video_url">Url</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="video_url" id="video_url" placeholder="enter Url">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="video_duration">Duration</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="video_duration" id="video_duration"
                                                                placeholder="enter duration">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="thumb_image">Image</label>
                                                            <div class="input-group">
                                                                <input type="file" id="thumb_image" name="thumb_image"
                                                                    class="dropify @error('thumb_image') is-invalid @enderror"
                                                                    value="{{ old('thumb_image') }}">
                                                                @error('thumb_image')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-warning"
                                                            id="formSubmit">Create</button>
                                                        <button type="button" class="btn"
                                                            style="background-color:#121212; color:#fff"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="story" class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Title</th>
                                            <th>ThumbnailImage</th>
							<th>Url</th>
							<th>Description</th>
                                            <th>Duration</th>
                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($videos as $video)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $video->title }}</td>
                                            <td>
                                                @if(!empty($video->thumb_image))
                                                <img style="width: 100px; height: 100px;" alt="no image"
                                                    src="{{asset('images/'.$video->thumb_image)}}" /> 
                                                @endif
                                            </td>
                                            <td>{{ $video->video_url }}</td>
                                            <td>{{ $video->description }}</td>
                                            <td>{{ $video->video_duration }}</td>
                                            <td>
                                            <button type="button" class="btn btn-color" data-toggle="modal" style=" background-color: #14A2B8;"
                                                    data-target="#exampleModalCenter{{$video->id}}">
                                                    <i class="fas fa-pen-fancy"></i>
                                                </button>

                                                <div class="modal fade" id="exampleModalCenter{{$video->id}}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    Video Edit Form</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form onsubmit="return editValidateForm()"
                                                                    name="videoForm" id="videoForm"
                                                                    action="{{ url('/video/updateVideo/'.$video->id) }}"
                                                                    method="post" enctype="multipart/form-data">@csrf
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="title">Title</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-border"
                                                                                name="title" id="title"
                                                                                placeholder="enter title"
                                                                                value="{{$video->title}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="video_url">Url</label>
                                                                            <input type="text" class="form-control form-control-border"
                                                                                name="video_url" id="video_url" placeholder="enter Url" value="{{$video->video_url}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="video_duration">Duration</label>
                                                                            <input type="text" class="form-control form-control-border"
                                                                                name="video_duration" id="video_duration"
                                                                                placeholder="enter duration" value="{{$video->video_duration}}">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="description">Description</label>
                                                                            <textarea class="form-control" id="description" name="description" rows="3">{{$video->description}}</textarea>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="thumb_image">Image</label>
                                                                            <div class="input-group">
                                                                                <input type="file" id="thumb_image" name="thumb_image"
                                                                                    class="dropify @error('thumb_image') is-invalid @enderror"
                                                                                    data-default-file="{{url('images/'.$video->thumb_image)}}">
                                                                                <!-- @error('thumb_image')
                                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                                @enderror -->
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-warning">Update</button>
                                                                        <button type="button" class="btn"
                                                                            style="background-color:#121212; color:#fff"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <a onclick="return confirm('Are you sure want to delete this Subscription?')" style=" background-color: #14A2B8;"
                                                    href="{{url('/video/delete/'.$video->id)}}"
                                                    class="btn btn-color" role="button"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </td>
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