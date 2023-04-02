@extends('backend.layouts.admin_master')


@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Insert About</h4>
                <p class="card-description"> </p>
                <form action="{{ route('store.backend.about') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Add Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName1" >
                    </div>
                    <br>
                   
                  
                    
                    <div class="input-group">
                       
                        <input type="file" name="image" class="file-upload-default">
                        
                    </div>
                    <br><br>
                  
                    
                    <div class="form-group">
                        <label for="exampleTextarea1">Add Description</label>
                        <textarea class="form-control" name="description"  id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" style="float: right;" >Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
   
    
@endsection
