@extends('fontend.layouts.home_master')
@section('content')
    <header class="full_bg">
        <!-- header inner -->

        <!-- end header inner -->
        <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                    @foreach ($slider as $key=>$item)

                    <div class="carousel-item {{ $key == 0? 'active' :'' }}">
                        <div class="container">
                            <div class="carousel-caption  banner_po">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="build_box text_align_left">
                                            <h1>{{ $item->title }}</h1>
                                            <p>{!! $item->desc !!}</p>
                                            <a class="read_more conatct_btn" href="#contact" role="button">Contact now</a>
                                            <a class="read_more conatct_btn" href="#product" role="button">See More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach

                    

                    

                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- end header -->

    </header>


    <!-- end banner -->
    <!-- about -->
    <div id="about" class="about">
        <div class="bg_about">
            <div class="container">
                <div class="row d_flex">
                    <div class="col-md-5">
                        <div class="about_img">
                            <figure><img src=" {{ asset($about->image) }}" alt="#" /></figure>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <div class="titlepage text_align_center">
                            <h2> Kitchen Hardware Solutions Inc</h2>
                            <p>For many homeowners, as much as the big and grandiose decorations and features matter, it's
                                the
                                little things that really bring it all together. Whether it’s the shaded pattern on the
                                curtains, the type of framing on the doorways, or the handles on kitchen cabinets, the small
                                yet
                                important details are the glue that holds the whole interior aesthetic together. Having
                                variety,
                                selection, and overall preference for these small decorative details allows for many
                                homeowners
                                to dictate the style they want for their home interior, and the aesthetic that comes with
                                it.
                                It's like a wedding, where all the small details that don't seem to matter on their own
                                really
                                come together to create the larger desired environment, although the longevity of a
                                well-designed home might have a longer lifespan than a marriage.
                            </p>
                            <a class="read_more" href="Javascript:void(0)">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- products -->
    <div id="product" class="prot">
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_left">
                            <h2>Decorative Hardware</h2>
                            <p>Trend, design, innovation, tradition, and selection. In our newly designed and user-friendly
                                Decorative Hardware website section, you can enjoy an offering of cabinet hardware with the
                                widest selection of finishes, materials, and design combinations. A voyage through our
                                collection lets you experience unique creations crafted by world-renowned designers and
                                manufactured according to strict quality guidelines.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="prod" class="carousel slide product_banner" data-ride="carousel">
                <div class="carousel-indicators">
                    <ol class="carousel-indicators">
                        <button type="#prod" data-bs-target="#prod" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="#prod" data-bs-target="#prod" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="#prod" data-bs-target="#prod" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </ol>
                </div>
                <div class="carousel-inner">
                    @foreach ($product as $key=>$item)
                    <div class="carousel-item {{ $key == 0? 'active' :'' }}">
                        <figure><img src=" {{ asset($item->image) }}" class="mx-auto"
                                alt="..."></figure>
                        <div  class="carousel-caption d-none d-lg-block customise">
                            <h5 class="text-dark" > Title:{{ $item->title }}</h5>
                                <p> <b>Description:</b>  {!! $item->description !!}</p>
                                <div>
                                    <p> <b>Price: {{ $item->price }}</b> </p>
                           <a href="{{ route('fontend.checkout',$item->id) }}">
                            <button type="button" class="buy_butt">                            
                            <h5> Buy Now</h5>   
                        </button></a> 

                                </div>

                                
                        </div>
                    </div>
                        
                    @endforeach

                


                </div>
                <a class="carousel-control-prev" href="#prod" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#prod" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <!--  contact -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg_yeloow">
                                <div class="titlepage text_align_center">
                                    <h2>Contact Us</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <form id="request" class="main_form" action="{{ route('fontend.contact') }}" method="post" >
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <input class="contactus" placeholder="Name" type="text"
                                                        name=" name">
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="contactus" placeholder="Email" type="email"
                                                        name="email">
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="contactus" placeholder="Phone Number" type="text"
                                                        name="phone">
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea class="textarea" placeholder="Message" type="text" name="message">Message</textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button  type="submit" class="send_btn">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
