@extends('layouts.master')
@section('title')
  <title>Decorations</title>
@endsection
@section('content')

<section class="bg-white pad-75">
  <div class="container">
    <div class="clearfix"></div>
    <h1 class="section-title"> Decoration </h1>
    @foreach($data as $decoration)
    <div class="col-md-4">
   
      <div class="card">
        <figure> <img src="evmng/experience/cessena/2.jpg" class="img-responsive"> </figure>
        <div class="card-details">
          <h6>{{$decoration->city}}</h6>
          <h4><a href="experience/cessena/"> {{$decoration->name}} </a></h4>
          <div class="price col-md-6 no-padding">
            <span class="rupee"> Rs </span> <span class="num">{{$decoration->price}} </span><span class="per-head"> Per Head </span>
          </div>
          <div class="button-view col-md-6 text-right no-padding">
            <a href="{{url('/decoration/single')}}/{{$decoration->id}}" class="btn-view-more"> View More </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      
    </div>
    @endforeach
    <div class="col-md-4">
      <div class="card">
        <figure> <img src="evmng/experience/guitarist/2.jpg" class="img-responsive"> </figure>
        <div class="card-details">
          <h6>Bangalore</h6>
          <h4> Guitarist with bouquet and cake</h4>
          <div class="price col-md-6 no-padding">
            <span class="rupee"> Rs </span> <span class="num">3500 </span><span class="per-head"> </span>
          </div>
          <div class="button-view col-md-6 text-right no-padding">
            <a href="experience/guitarist/" class="btn-view-more"> View More </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <figure> <img src="evmng/experience/helipad/1.jpg" class="img-responsive"> </figure>
        <div class="card-details">
          <h6>Bangalore</h6>
          <h4> Candle light dinner under helipad</h4>
          <div class="price col-md-6 no-padding">
            <span class="rupee"> Rs </span> <span class="num">8500 </span><span class="per-head"></span>
          </div>
          <div class="button-view col-md-6 text-right no-padding">
            <a href="experience/helipad/" class="btn-view-more"> View More </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <figure> <img src="evmng/experience/helium-balloon/2.jpg" class="img-responsive"> </figure>
        <div class="card-details">
          <h6>Bangalore</h6>
          <h4> Bouquet with helium ballons</h4>
          <div class="price col-md-6 no-padding">
            <span class="rupee"> Rs </span> <span class="num">2500 </span><span class="per-head"></span>
          </div>
          <div class="button-view col-md-6 text-right no-padding">
            <a href="experience/helium-balloon/" class="btn-view-more"> View More </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <figure> <img src="evmng/experience/sterlings-mac/1.jpg" class="img-responsive"> </figure>
        <div class="card-details">
          <h6>Bangalore</h6>
          <h4> Candle light dinner at a private place</h4>
          <div class="price col-md-6 no-padding">
            <span class="rupee"> Rs </span> <span class="num">5500 </span><span class="per-head"></span>
          </div>
          <div class="button-view col-md-6 text-right no-padding">
            <a href="experience/sterlings-mac/" class="btn-view-more"> View More </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    
    <div class="clearfix"></div>
  </div>
</section>
<section class="feature">
<div class="container">
  <div class="fet-list">
  <h2> Why Choose us ? </h2>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center feature">
    <img src="evmng/img/badge.png" alt="100% Quality service delivery eventment">
    <div class="text-center">
      <div class="fet-title">100% Quality</div>
      <div class="fet-desc">
        We take utmost care for your event because we want to create memories. Our team will be present for assistance while executing.
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center feature">
    <img src="evmng/img/customization.png" alt="Easy Booking on Evibe">
    <div class="text-center">
      <div class="fet-title">Customization</div>
      <div class="fet-desc">
        We might not have what you want. We will get the best package within your budget to make you happy.
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center feature">
    <img src="evmng/img/options.png" alt="Best Options">
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

jsjsjsjsjjsj






<div class="homecontent">
<h1>Experiance</h1>

 <div class="col-sm-10">
  
  <br>
  <div id="projects">
   <ul>
   @foreach($data as $experianc)

    <li><a href="{{url('/experience/single')}}/{{$experianc->id}}"><img src="images/demo/12.jpg" alt="" width="150px" height="150px" /><strong>Read More About This Project  {{$experianc->name}} &raquo;</strong>
    <p>{{$experianc->description}}</p>
    </a></li>
    
  

  @endforeach
   </ul>
   </div><br>
</div><br><br>
@foreach($image as $img)
    {{$img->filename}}
    <img src="">
@endforeach

@section('project')
<div id="projects">
    <h2>Our Latest Projects</h2>
    <ul>
      <li><a href="#"><img src="images/demo/12.jpg" alt="" width="290px" height="290px" /><strong>Read More About This Project &raquo;</strong></a></li>
      <li><a href="#"><img src="images/demo/12.jpg" alt="" width="290px" height="290px"/><strong>Read More About This Project &raquo;</strong></a></li>
      <li class="last"><a href="#"><img src="images/demo/12.jpg" alt="" width="290px" height="290px"/><strong>Read More About This Project &raquo;</strong></a></li>
    </ul>
    <div class="clear"></div>
  </div>
@endsection
</div>


@endsection