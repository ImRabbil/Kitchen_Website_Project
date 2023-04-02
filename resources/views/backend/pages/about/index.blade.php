@extends('backend.layouts.admin_master')


@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All About List
                     <a href="{{ route('backend.add.about') }}"> <button class="btn btn-info" style="float: right">Add
                        About</button></a> 

                </h4>
                <p class="card-description"> 
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Title Name </th>
                                <th> Image </th>
                                <th> Description </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        @php
                        $i =1;
                            
                        @endphp
                        <tbody>
                            @foreach ($about as $item)
                            <tr>
                                <td> {{ $i++ }} </td>
                                <td> {{ $item->title }} </td>
                                <td  > {{ Str::limit($item->description, 100) }}  </td>
                                <td> <img src="{{ asset($item->image) }}" alt="">  </td>
                                <td> 
                                    
                                        <a href="{{ url('backend/edit/about', $item->id) }}"
                                            class="btn btn-success">Edit</a>
                                        <a href="{{ url('backend/delete/about', $item->id) }}"
                                            onclick="return confirm('Are You sure to Delete of Select Data')"
                                            class="btn btn-danger">Delete</a>
                                    
                                </td>
                            </tr>
                                
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
