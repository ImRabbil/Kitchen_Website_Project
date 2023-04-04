@extends('backend.layouts.admin_master')


@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Subscribe List</h4>
                <p class="card-description"> 
                </p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Subscribe Email </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        @php
                        $i =1;
                            
                        @endphp
                        <tbody>
                            @foreach ($sub as $item)
                            <tr>
                                <td> {{ $i++ }} </td>
                                <td> {{ $item->email }} </td>                                                   
                                <td> 

                                        <a href="{{ url('backend/delete/sub', $item->id) }}"
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
