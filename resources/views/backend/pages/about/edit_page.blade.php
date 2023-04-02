@extends('backend.layouts.admin_master')


@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Insert About</h4>
                <p class="card-description"> </p>
               
                <form action=" {{ route('update.backend.about',$about->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Add Title</label>
                        <input type="text" name="title" value="{{ $about->title }}" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <br>



                    <label for="exampleFormControlInput1" class="form-label">New
                        Image</label>
                    <input type="file" value="{{ $about->image }}" name="image" class="form-control"
                        id="exampleFormControlInput1">
                    <input type="hidden" name="old_image" value="{{ $about->image }}">
                    <div class="form-group">
                        <img src="{{ asset($about->image) }}" style="height:100px;width:200px">
                    </div>
                    <br><br>


                    <div class="form-group">
                        <label for="exampleTextarea1">Add Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{ $about->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" style="float: right;">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
