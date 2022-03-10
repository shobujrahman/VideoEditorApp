@extends('layouts.admin_layout.admin_layout')

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>SubsriptionTable</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Subsriptions</li>
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
                                <h3 class="card-title">All Subsriptions</h3>
                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                    style="max-width: 200px;  float:right; display:inline-block;">
                                    <i class="fas fa-plus-circle"> Subscription</i>

                                </button>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Subscription Create
                                                    Form
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form onsubmit="return validateForm()" name="iterestForm"
                                                    id="iterestForm" action="{{ url('/subscription/submit') }}"
                                                    method="post" enctype="multipart/form-data">@csrf

                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name">Title</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="name" id="name" placeholder="enter title">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="price" id="price" placeholder="enter price">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="durationInMonth">Duration</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="durationInMonth" id="durationInMonth"
                                                                placeholder="enter duration">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="package_type">Package Type</label>
                                                            <select class="custom-select form-control-border" id="package_type" name="package_type">
                                                                <option value="premium">Premium</option>
                                                                <!-- <option value="who_likes_you">Who Likes You</option>
                                                                <option value="unlock_top_picks">Unlock Top Picks</option>
                                                                <option value="message_before_match">Message Before Match</option>
                                                                <option value="video_call">Video Call</option>
                                                                <option value="audio_call">Audio Call</option>
                                                                <option value="broadcast_gift">Broadcast gift</option>
                                                                <option value="super_likes">Super Likes</option>
                                                                <option value="boost_profile">Boost profile</option>
                                                                <option value="buy_coin">Buy Coin</option> -->

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="google_product_id">Google Product Id</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="google_product_id" id="google_product_id"
                                                                placeholder="enter Product id as">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="metadata">Meta Data</label>
                                                            <input type="text" class="form-control form-control-border"
                                                                name="metadata" id="metadata"
                                                                placeholder="enter metadata as optional">
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
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Title</th>
                                            <th>Price</th>
							<th>ProductId</th>
							<th>Package Type</th>
                                            <th>DurationMonth</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subscriptions as $subscription)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $subscription->name }}</td>
                                            <td>{{ $subscription->price }}</td>
							<td>{{ $subscription->google_product_id }}</td>
							<td>{{ $subscription->package_type }}</td>
                                            <td>{{ $subscription->durationInMonth }}</td>
                                            <td>
                                                @if($subscription->isBlocked==0)
                                                <!-- <a href="{{url('subscription/update-status',$subscription->id)}}"
                                                    class="btn" style=" background-color: #25CE2A; color:#fff"> Enabled
                                                </a> -->
                                                <label class="label" style=" background-color: #25CE2A;"><a
                                                        href="{{url('subscription/update-status',$subscription->id)}}"
                                                        style="color:white;"> Enabled
                                                    </a></label>
                                                @else
                                                <!-- <a href="{{url('subscription/update-status',$subscription->id)}}"
                                                    class="btn" style=" background-color: #F15A27; color:#fff">Disabled
                                                </a> -->
                                                <label class="label" style=" background-color: #F15A27;"><a
                                                        href="{{url('subscription/update-status',$subscription->id)}}"
                                                        style="color:white;">Disabled
                                                    </a></label>
                                                @endif
                                            </td>
                                            <td>

                                                <button type="button" class="btn btn-color" data-toggle="modal" style=" background-color: #14A2B8;"
                                                    data-target="#exampleModalCenter{{$subscription->id}}">
                                                    <i class="fas fa-pen-fancy"></i>
                                                </button>

                                                <div class="modal fade" id="exampleModalCenter{{$subscription->id}}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    Subscription Edit Form</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form onsubmit="return editValidateForm()"
                                                                    name="iterest" id="iterest"
                                                                    action="{{ url('/subscription/update/'.$subscription->id) }}"
                                                                    method="post" enctype="multipart/form-data">@csrf
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="name">Title</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-border"
                                                                                name="name" id="name"
                                                                                placeholder="enter title"
                                                                                value="{{$subscription->name}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="price">Price</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-border"
                                                                                name="price" id="price"
                                                                                placeholder="enter price"
                                                                                value="{{$subscription->price}}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="durationInMonth">Duration</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-border"
                                                                                name="durationInMonth"
                                                                                id="durationInMonth"
                                                                                placeholder="enter duration"
                                                                                value="{{$subscription->durationInMonth}}">
                                                                        </div>

                                                                      <div class="form-group">
                                                                            <label for="package_type">Package Type</label>
                                                                            <select class="custom-select form-control-border" id="package_type" name="package_type">
                                                                                <option value="premium" <?php if($subscription->package_type=='premium'){
                                                                                    echo "selected";
                                                                                } ?> >Premium</option>
                                                                                <!-- <option value="who_likes_you" <?php if($subscription->package_type=='who_likes_you'){
                                                                                    echo "selected";
                                                                                } ?> >Who Likes You</option>
                                                                                <option value="unlock_top_picks" <?php if($subscription->package_type=='unlock_top_picks'){
                                                                                    echo "selected";
                                                                                } ?> >Unlock Top Picks</option>
                                                                                <option value="message_before_match" <?php if($subscription->package_type=='message_before_match'){
                                                                                    echo "selected";
                                                                                } ?> >Message Before Match</option>
                                                                                <option value="video_call" <?php if($subscription->package_type=='video_call'){
                                                                                    echo "selected";
                                                                                } ?> >Video Call</option>
                                                                                <option value="audio_call" <?php if($subscription->package_type=='audio_call'){
                                                                                    echo "selected";
                                                                                } ?> >Audio Call</option>
                                                                                <option value="broadcast_gift" <?php if($subscription->package_type=='broadcast_gift'){
                                                                                    echo "selected";
                                                                                } ?> >Broadcast gift</option>
                                                                                <option value="super_likes" <?php if($subscription->package_type=='super_likes'){
                                                                                    echo "selected";
                                                                                } ?> >Super Likes</option>
                                                                                <option value="boost_profile" <?php if($subscription->package_type=='boost_profile'){
                                                                                    echo "selected";
                                                                                } ?> >Boost profile</option>
                                                                                <option value="buy_coin" <?php if($subscription->package_type=='buy_coin'){
                                                                                    echo "selected";
                                                                                } ?> >Buy Coin</option> -->

                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="google_product_id">Google Product Id</label>
                                                                            <input type="text" class="form-control form-control-border"
                                                                                name="google_product_id" id="google_product_id"
                                                                                placeholder="enter Product id as" value="{{$subscription->google_product_id}}">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="metadata">Meta Data</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-border"
                                                                                name="metadata" id="metadata"
                                                                                placeholder="enter metadata"
                                                                                value="{{$subscription->metadata}}">
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
                                                    href="{{url('/subscription/delete/'.$subscription->id)}}"
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