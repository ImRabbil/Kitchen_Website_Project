<div class="header">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class=" col-md-2 col-sm-3 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src=" {{ asset($setting->logo) }}" alt="#" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-9">
                <ul class="site_menu text_align_right">
                    <li>
                        <button class="openbtn" onclick="openNav()"><img
                                src=" {{ asset('fontend') }}/images/menu_icon.png"></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="mySidepanel" class="sidepanel">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a class="active" href="index.html">Home</a>
    <a href="#about">About</a>
    <a href="#product">Products</a>
    <a href="#contact">Contact</a>
</div>
