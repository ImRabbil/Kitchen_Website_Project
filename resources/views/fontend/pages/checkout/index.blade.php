@extends('fontend.layouts.home_master')
@section('content')
    <div class="container" style="padding-top:145px">

        <div class="text-center">

            <h2 class="text-dark">Checkout</h2>
           
        </div>

        <form action="{{ route('fontend.checkout.store') }}" method="POST" >
            @csrf
            <input type="hidden" name="product_id" value="{{ $checkout->id }}">
            <input type="hidden" name="product_price" value="{{ $checkout->price }}">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Order</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0 text-dark">Product Name</h6>
                            </div>
                            <span class="text-muted">{{ $checkout->title }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed ">
                            <div>
                                <h6 class="my-0 text-dark">Description</h6>
                            </div>
                            <span class="text-muted  " style="font-size: 10px !important;" >{!! $checkout->description !!}</span>
                        </li>
                       
                       
                       
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6 class="my-0 text-dark">Total (USD)</h6>
                            </div>
                            <strong>${{ $checkout->price }}</strong>
                            
                        </li>
                    </ul>
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Payment</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>

                                <img src="https://epaymaker.com/images/logo/1591645593.logo_F.png" alt="epaymaker"
                                    width="100%">
                            </div>
                        </li>
                        <li class="list-group-item">
                            <span>Card Number<span class="text-danger">*</span></span>
                            <input type="text" name="card_number" class="form-control"
                                placeholder="Enter your card number" >
                        </li>
                        <li class="list-group-item">
                            <span>Expiry Month (MM)<span class="text-danger">*</span></span>
                            <input type="text" name="expiry_month" class="form-control mr-2" placeholder="MM"
                             required  >
                        </li>

                    <li class="list-group-item">
                        <span>Expiry Year(YYYY)<span class="text-danger">*</span></span>
                        <input type="text" name="expiry_year" class="form-control mr-2" placeholder="YY"
                          required >
                    </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>CVC<span class="text-danger">*</span></span>
                                    <input type="text" name="cvc" class="form-control" placeholder="CVC" required
                                     
                                </div>
                                <div class="ml-2">
                                    <span>Currency<span class="text-danger">*</span></span>
                                    <input type="text" name="currency" class="form-control" placeholder="Currency" required>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3 text-dark" >Billing address</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter your first name"
                                name="f_name" value="" required="">
                            
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter your last name"
                                name="l_name" value="" required="">
                            
                        </div>
                    </div>

                

                    <div class="mb-3">
                        <label for="address">Address<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="address"
                            placeholder="House number and street name" name="address" value="" required="">
                       
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city">Country<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city"
                                name="country" value="" required="">
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city">State<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city"
                                name="state" value="" required="">
                            
                        </div>
                       
                      
                        <div class="col-md-6 mb-3">
                            <label for="city">City<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" placeholder="Enter your city"
                                name="city" value="" required="">
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="zip">Zip<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="zip" name="zip" required="">
                            
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone">Phone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone"
                            name="phone"  required="">
                        
                    </div>

                    <div class="mb-3">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email"
                            name="email"  required="">
                       
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-warning btn-lg btn-block" type="submit">Payment</button>

                </div>
            </div>
        </form>
    </div>
@endsection
