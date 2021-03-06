<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="{{url('evmng/css/style.css')}}" type="text/css">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<link href="{{url('evmng/css/thumbnail-slider.css')}}" rel="stylesheet" />
<link href="{{url('evmng/css/ninja-slider.css')}}" rel="stylesheet" />



</head>
<body>
<div class="bg-light-grey">
<header>
  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top mobile" role="navigation">
      <div class="container topnav">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand topnav" href="/"> <img src="{{url('evmng/img/logo_c.png')}}" class="logo img-responsive" alt="Internstreet logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right header-links">
            <li><a class="page-scroll"><i class="fa fa-phone"></i> 8971639629</a></li>
          </ul>
        </div>
      </div>
  </nav>
</header>
<div class="head-section">
  <div class="blur-bg" style="background: url('img/image1.jpg') no-repeat; background-size: cover;"> </div>
  <div class="image-container align-center">
        <div id="ninja-slider" class="float-left">
            <div class="slider-inner">
                <ul>
                @foreach($image as $img)
                    <li><a class="ns-img" href="{{url($img->file_path)}} "></a></li>
                    @endforeach
                    <li><a class="ns-img" href=" {{url('evmng/img/image1.jpg')}}"></a></li>
                    <li><a class="ns-img" href=" {{url('evmng/img/image1.jpg')}}"></a></li>
                    <li><a class="ns-img" href=" {{url('evmng/img/image1.jpg')}}"></a></li>
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <div id="thumbnail-slider" class="float-left hidden-sm hidden-xs">
            <div class="inner">
                <ul>
                @foreach($image as $img)
                    <li>
                        <a class="thumb" href=" {{url($img->file_path)}}"></a>
                    </li>
                    @endforeach
                    <li>
                        <a class="thumb" href=" evmng/img/image1.jpg"></a>
                    </li>
                   <li>
                        <a class="thumb" href=" evmng/img/image1.jpg"></a>
                    </li>
                    <li>
                        <a class="thumb" href=" evmng/img/4.jpg"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
 </div>
<div class="clearfix"></div>
<div class="section-details">
  <div class="container">
      <div class="col-md-8 title text-sm-center"> 
        <h1>{{$exp->name}}</h1>
        <h4> {{$exp->city}}</h4>
      </div>
      <div class="col-md-4 pos-rel">
        <div class="side-navbar sidebar bg-white">
          <div class="booking-panel">
            <div class="row-cards border-bt">
              <div class="col-md-4 col-sm-4 col-xs-4 no-padding text-center"> 
                <img src="{{url('evmng/img/rupee.png')}}" alt="Best price guaranteed">
              </div>
              <div class="col-md-8 col-sm-8 col-xs-8">
                <h4> Best Price Guaranteed </h4>
                <h6> We guarantee you the best price</h6>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="row-cards price-cards">
              <div class="col-md-4 col-sm-4 col-xs-4 no-padding text-center"> 
                <h4 class="pr-text"> Price</h4>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-8">
                <h2 class="price"> <span class="font-lw">Rs</span> {{$exp->price}} </h2>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="row-cards book-now-cards border-bt">
              <a href="#" class="btn btn-lg btn-book-now"> Book Now </a>
            </div>
            <div class="row-cards">
              <h2 class="ques"> Have any Questions ? </h2>
              <div class="col-md-2 col-sm-3 col-xs-3 no-padding text-center"> 
                <img src="{{url('evmng/img/phone.png')}}" alt="Call us at">
              </div>
              <div class="col-md-10 col-sm-9 col-xs-9">
                <h3 class="phone-num"> 9049934093 </h3>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 description mar-t-30">
        <h3 class="mar-b-20 title"> Description </h3>
        Candle light dinner in a private place at a 5 star hotel
        <ul>
          <li> Standard cake</li>
          <li> Table decoration with rose petals</li>
          <li> 2 glass of wine</li>
          <li> 5 course dinner</li>
          <li> Private butler to serve</li>
        </ul>
        <br><br><br>
      </div>
      <div class="clearfix"></div>
    </div>  
  </div>
</div>
<section class="feature">
<div class="container">
  <div class="fet-list">
  <h2> Why Choose us ? </h2>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center feature">
    <img src="{{url('evmng/img/badge.png')}}" alt="100% Quality service delivery eventment">
    <div class="text-center">
      <div class="fet-title">100% Quality</div>
      <div class="fet-desc">
        We take utmost care for your event because we want to create memories. Our team will be present for assistance while executing.
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center feature">
    <img src="{{url('evmng/img/customization.png')}}" alt="Easy Booking on Evibe">
    <div class="text-center">
      <div class="fet-title">Customization</div>
      <div class="fet-desc">
        We might not have what you want. We will get the best package within your budget to make you happy.
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center feature">
    <img src="{{url('evmng/img/options.png')}}" alt="Best Options">
    <div class="text-center">
      <div class="fet-title">Best Options</div>
      <div class="ben-desc">
        We always look out for best options in the market for our customers and our expert's team is always ready to serve customer.
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  </div>
</div>
</section>
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 footerleft ">
        <div class="logo-footer"><img src="{{url('evmng/img/logo_w.png')}}" alt="Eventment logo"></div>
        <p> </p>
        <p><i class="fa fa-phone"></i> Phone : 8971639629</p>
        <p><i class="fa fa-envelope"></i> E-mail : hello@eventment.in</p>
        
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINKS</h6>
        <ul class="footer-links">
          <li><a href="#"> About us</a></li>
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
     
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="col-md-12 no-padding">
        <p>© 2017 - All rights reserved</p>
      </div>
    </div>
  </div>
</footer>
<!--footer ends here-->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" crossorigin="anonymous"></script>
<script src="{{url('evmng/js/thumbnail-slider.js')}}"></script>
<script src="{{url('evmng/js/ninja-slider.js')}}"></script>
<script>
$(document).ready(function(){       

});
</script>
</html>
