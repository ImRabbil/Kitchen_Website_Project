@extends('backend.layouts.admin_master')
@section('content')
    <div class="container">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 card">
                    <div class="card">
                        <div class="card-header"> All Products Checkout List
                            {{-- <a href="{{ route('backend.add.product') }}"> <button class="btn btn-info" style="float: right">Add
                                    Product</button></a> --}}
                        </div>
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">SI No</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Amout</th>
                                    <th scope="col">TransactionID</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($checkout as $row)
                                    <tr>
                                        <th scope="row" width="5%"> {{ $i++ }}</th>
                                        <td >{{ $row->f_name }} {{ $row->l_name }}</td>
                                        <td >{{ $row->title }}</td>
                                        <td >{{ $row->product_price }}</td>
                                        <td >{{ $row->transactionId }}</td>
                                        <td >{{ $row->country }}</td>
                                         <td >{{ $row->city }}</td>
                                         <td >{{ $row->address }}</td>
                                         <td >{{ $row->phone }}</td>
                                         <td >{{ $row->email }}</td>                                 
                                        <td>
                                           
                                            <a href="{{ url('backend/delete/product/checkout', $row->id) }}"
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