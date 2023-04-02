@extends('backend.layouts.admin_master')
@section('content')
    <div class="container">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 card">
                    <div class="card">
                        <div class="card-header"> All Products List
                            <a href="{{ route('backend.add.product') }}"> <button class="btn btn-info" style="float: right">Add
                                    Product</button></a>
                        </div>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">SI No</th>
                                    <th scope="col">Products Name</th>
                                    <th scope="col">Products Description</th>
                                    <th scope="col">Products Price</th>
                                    <th scope="col">Products Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($product as $row)
                                    <tr>
                                        <th scope="row" width="5%"> {{ $i++ }}</th>
                                        <td width="15%">{{ $row->title }}</td>
                                        <td width="15%">{{  Str::limit($row->description, 50)  }}</td>
                                        <td width="15%">{{ $row->price }}</td>
                                        <td width="15%"><img src="{{ asset($row->image) }}" alt=""></td>
                                        <td width="15%">
                                            <a href="{{ url('backend/edit/product', $row->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ url('backend/delete/product', $row->id) }}"
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
            <br>
        </div>
    </div>
@endsection
