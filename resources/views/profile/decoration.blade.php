@extends('base.profile')

@section('content')
	<div class="head-section">
		<div class="blur-bg" style="background: url('img/image1.jpg') no-repeat; background-size: cover;"> </div>
		<div class="image-container align-center">
			<div id="ninja-slider" class="float-left">
				<div class="slider-inner">
					<ul>
						@foreach($image as $img)
							<li><a class="ns-img" href="{{url($img->file_path)}} "></a></li>
						@endforeach
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
				<h1>{{$decoration->name}}</h1>
				<h4> {{$decoration->city}}</h4>
			</div>
			<div class="col-md-4 pos-rel">
				<div class="side-navbar sidebar bg-white">
					<div class="booking-panel">
						<div class="row-cards border-bt">
							@include('base.service')
							<div class="clearfix"> </div>
						</div>
						<div class="row-cards price-cards">
							<div class="col-md-4 col-sm-4 col-xs-4 no-padding text-center">
								<h4 class="pr-text"> Price</h4>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<h2 class="price"> <span class="font-lw">Rs</span> {{$decoration->price}} </h2>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="row-cards book-now-cards border-bt">
							@include('base.booking')
						</div>
						<div class="row-cards">
							<h2 class="ques"> Have any Questions ? </h2>
							<div class="col-md-2 col-sm-3 col-xs-3 no-padding text-center phone">
								<img src="{{url('evmng/img/phone.png')}}" alt="Call us at">
							</div>
							<div class="col-md-10 col-sm-9 col-xs-9">
								<h3 class="phone-num"> @include('base.contact') </h3>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 description mar-t-30">
				<h3 class="mar-b-20 title"> Description </h3>
				{!! html_entity_decode($decoration->description) !!}
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	@include('base.why-us')
@endsection