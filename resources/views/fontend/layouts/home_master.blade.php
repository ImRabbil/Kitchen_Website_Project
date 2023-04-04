<!DOCTYPE html>
<html lang="en">

<head>
   
   
    
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <link rel="shortcut icon" href="{{ asset($setting->fav_icon) }}" type="image/x-icon">
   <title>Kitchen Hardware Solutions Inc</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href=" {{ asset('fontend') }}/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href=" {{ asset('fontend') }}/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href=" {{ asset('fontend') }}/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('fontend') }}/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href=" {{ asset('fontend') }}/css/jquery.mCustomScrollbar.min.css">
   {{-- toaster --}}
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
    {{-- <div class="loader_bg">
      <div class="loader"><img src=" {{ asset('fontend') }}/images/loading.gif" alt="#" /></div>
   </div>  --}}
   <!-- end loader --> 
   {{-- <div id="mySidepanel" class="sidepanel">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a class="active" href="index.html">Home</a>
      <a href="#about">About</a>
      <a href="#product">Products</a>
      <a href="#contact">Contact</a>
   </div> --}}
   @include('fontend.include.header')
   <!-- header -->
  
      @yield('content')

   
  
   <!-- end contact -->
   <!--  footer -->
   @include('fontend.include.footer')
  
   <!-- end footer -->
   <!-- Javascript files-->
   <script src=" {{ asset('fontend') }}/js/jquery.min.js"></script>
   <script src=" {{ asset('fontend') }}/js/bootstrap.bundle.min.js"></script>
   <script src=" {{ asset('fontend') }}/js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src=" {{ asset('fontend') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="{{ asset('fontend') }}js/custom.js"></script>






{{-- //toster link here --}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>






</body>

</html>