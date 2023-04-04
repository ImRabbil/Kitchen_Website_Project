@extends('backend.layouts.admin_master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Setting</h4>
                <p class="card-description"> </p>
                <form action="{{ route('store.backend.setting',) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleInputName1">Facebook Link</label>
                        <input type="text" value="{{ $edit->facebook }}" name="facebook" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Twitter Link</label>
                        <input type="text" value="{{ $edit->twitter }}" name="twitter" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Linkdin Link</label>
                        <input type="text" value="{{ $edit->linkdin }}" name="linkdin" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Instagram Link</label>
                        <input type="text" value="{{ $edit->instagram }}" name="instagram" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="text" value="{{ $edit->email }}" name="email" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input type="text" value="{{ $edit->address }}" name="address" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" value="{{ $edit->phone }}" name="phone" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">New fav Icon
                        Image</label>
                    <input type="file" value="{{ $edit->fav_icon }}" name="fav_icon" class="form-control"
                        id="exampleFormControlInput1">
                    <input type="hidden" name="old_fav" value="{{ $edit->fav_icon }}">
                    <div class="form-group">
                        <img src="{{ asset($edit->fav_icon) }}" style="height:100px;width:200px">
                    </div>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">New
                        Image</label>
                    <input type="file" value="{{ $edit->logo }}" name="logo" class="form-control"
                        id="exampleFormControlInput1">
                    <input type="hidden" name="old_logo" value="{{ $edit->logo }}">
                    <div class="form-group">
                        <img src="{{ asset($edit->logo) }}" style="height:100px;width:200px">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-success mr-2" style="float: right;">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
