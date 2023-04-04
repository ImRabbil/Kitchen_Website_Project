@extends('backend.layouts.admin_master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Insert Product</h4>
                <p class="card-description"> </p>
                <form action="{{ route('update.setting') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                        <label for="exampleInputName1">Facebook Link</label>
                        <input type="text" name="facebook" value="{{$update->facebook}}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Twitter Link</label>
                        <input type="text" name="twitter" value="{{$update->twitter}}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Linkdin Link</label>
                        <input type="text" name="linkdin" value="{{$update->linkdin}}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Instagram Link</label>
                        <input type="text" name="instagram" value="{{$update->instagram}}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" name="email" value="{{$update->email}}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" name="address" value="{{$update->address}}" class="form-control" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" name="phone" value="{{$update->phone}}" class="form-control" id="exampleInputName1">
                    </div>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">New fav Icon
                        Image</label>
                    <input type="file" value="{{ $update->fav_icon }}" name="fav_icon" class="form-control"
                        id="exampleFormControlInput1">
                    <input type="hidden" name="old_fav" value="{{ $update->fav_icon }}">
                    <div class="form-group">
                        <img src="{{ asset($update->fav_icon) }}" style="height:100px;width:200px">
                    </div>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">New
                        Image</label>
                    <input type="file" value="{{ $update->logo }}" name="logo" class="form-control"
                        id="exampleFormControlInput1">
                    <input type="hidden" name="old_logo" value="{{ $update->logo }}">
                    <div class="form-group">
                        <img src="{{ asset($update->logo) }}" style="height:100px;width:200px">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success mr-2" >Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
