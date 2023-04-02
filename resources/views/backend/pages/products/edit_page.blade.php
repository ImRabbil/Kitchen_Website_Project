@extends('backend.layouts.admin_master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Product</h4>
                <p class="card-description"> </p>
                <form action="{{ route('update.backend.product', $products->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Add Product Name</label>
                        <input type="text" name="title" value="{{ $products->title }}" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleTextarea1">Add Product Description</label>
                        <textarea class="form-control" name="description" id="summernote" rows="4"> {!! $products->description !!}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputName1">Add Product Price</label>
                        <input type="text" name="price" value="{{ $products->price }}" class="form-control"
                            id="exampleInputName1">
                    </div>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">New
                        Image</label>
                    <input type="file" value="{{ $products->image }}" name="image" class="form-control"
                        id="exampleFormControlInput1">
                    <input type="hidden" name="old_image" value="{{ $products->image }}">
                    <div class="form-group">
                        <img src="{{ asset($products->image) }}" style="height:100px;width:200px">
                    </div>
                    <button type="submit" class="btn btn-success mr-2" style="float: right;">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
