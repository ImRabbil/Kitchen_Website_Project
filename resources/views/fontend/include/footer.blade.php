<footer>
    <div class="footer">
       <div class="container">
          <div class="row">
             <div class="col-md-8 offset-md-2">
                <div class="news">
                   <h3>Newsletter</h3>
                    <form action="{{ route('subscribe') }}" method="POST" >
                     @csrf
                      <input class="newsltter" placeholder="enter your email" type="email" name="email">
                      <button type="submit" class="sunm_btn">SUBSCRIBE</button>
                   </form>
                </div>
             </div>
             <div class=" col-md-10 offset-md-1">
                <ul class="conta">
                   <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$setting->address}}</li>
                   <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{ $setting->phone}}</li>
                   <li> <i class="fa fa-envelope" aria-hidden="true"></i><a
                         href="#"> {{$setting->email}} </a></li>
                </ul>
             </div>
             <div class="col-md-12">
                <ul class="social_icon">
                   <li><a><i class="{{$setting->facebook}}" aria-hidden="true"></i></a></li>
                   <li><a><i class="{{$setting->twitter}}" aria-hidden="true"></i></a></li>
                   <li><a><i class="{{$setting->linkdin}}" aria-hidden="true"></i></a></li>
                   <li><a><i class="{{$setting->instagram}}" aria-hidden="true"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="copyright">
          <div class="container">
             <div class="row">
                <div class="col-md-10 offset-md-1">
                   <p>Copyright 2023 All Right Reserved By Kitchen Hardware Solutions Inc.</a></p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>