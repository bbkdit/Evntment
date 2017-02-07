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
				<h1>{{$data->name}}</h1>
				<h4> {{$data->city}}</h4>
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
								<h2 class="price"> <span class="font-lw">Rs</span> {{$data->price}} </h2>
								@if($data->is_per_head) <h5> PER HEAD</h5> @endif
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
				{!! html_entity_decode($data->description) !!}
			</div>
			<div class="col-md-8 description mar-t-30">
				<h3 class="mar-b-20 title"> Terms of Booking </h3>
				<ul>
					<li> You need to book this package minimum 3 days in advance.</li>
					<li> Occupancy is restricted to the registered guests only.</li>
					<li>There is no refund in the event of cancellation. There are no adjustments for late arrivals or early departures.For anything additional which is not mentioned here, charges will be extra.</li>
					<li>Storing of hazardous goods in the property is strictly prohibited.</li>
					<li>We reserve the right to eject any guests who are engaging in fights, illegal activities or generally disrupting the peace of the hotel. </li>
					<li>Any breakages / lost items related to the property caused during your stay will be charged to your personal accountability and will be settled in full upon check-out. The amount to be charged is based on the price acquisition of such item(s) or the actual quote. </li>
					<li>Although we use all reasonable safety precautions, we cannot be held liable for any casualties arising at any stage.
					</li>
				</ul>
				<br>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	@include('base.why-us')
@endsection