<!DOCTYPE html>
<html>
<head>
@yield('title')
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{url('evmng/css/style.css')}}">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<section class="home-header" style="background: url('evmng/img/bg-header-2.jpg') no-repeat; background-size: cover; "> 
<div class="bg-gradient mobile"></div>
  <div class="home-logo">
    <div class="container">
      <img src="evmng/img/logo_c.png" alt="Eventment Logo"> 
    </div>
  </div>
  <div class="intro-header pos-rel section-home-header">
    <div class="top-content">
      <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 col-lg-offset-5 col-sm-offset-2 col-xs-offset-0 no-padding">
        <h4 class="secondary-title"> Find Better</h4>
        <h1 class="text-bg"> Places to Experience</h1>
        <div class="head-buttons">
          <ul>
         
            <li><a href="#"> Rooms </a> </li>
            <li><a href="{{ url('/decoration') }}"> Decorations </a> </li>
            <li><a href="{{ url('/experiance') }}"> Experience </a> </li>
            <li><a href="{{ url('/banquets') }}"> Banquets </a> </li>
            <li><a href="{{ url('/conference') }}"> Conference </a> </li>
            <li><a href="{{ url('/bachlore') }}"> Bachlore's party </a> </li>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</section>

@yield('content')


<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 footerleft ">
        <div class="logo-footer"><img src="evmng/img/logo_w.png" alt="Eventment logo"></div>
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
        <div class="fb-page" data-href="https://www.facebook.com/eventment.in">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/eventment.in"><a href="https://www.facebook.com/eventment.in">Facebook</a></blockquote>
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
</html>