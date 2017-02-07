@extends('layouts.master')

@section('content')
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
						<li><a href="#experience" class="page-scroll"> Experience </a> </li>
						<li><a href="#decoration" class="page-scroll"> Decorations </a> </li>
						<li><a href="#banquets" class="page-scroll"> Banquets </a> </li>
						<li><a href="#bachelors-party" class="page-scroll"> Bachelor's party </a> </li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section class="bg-white pad-75">
	<div class="container">
		@if(count($data['experience']) > 0)
		<div class="mar-t-10" id="experience">
		<h1 class="section-title"> Experience</h1>
		@foreach($data['experience'] as $exp)
		<div class="col-md-4">
			<div class="card">
				<figure> <img src="{{ url($exp['profile_img']) }}" class="img-responsive"> </figure>
				<div class="card-details">
					<h6> {{ $exp['city'] }}</h6>
					<h4> <a href="{{ route('experience.profile', $exp['id']) }}">{{ $exp['name'] }}  </a></h4>
					<div class="price col-md-6 col-xs-6 no-padding">
						<span class="rupee"> Rs </span> <span class="num">{{ $exp['price'] }}  </span>
						@if($exp['is_per_head'])
							<span class="per-head"> Per Head </span>
						@endif
					</div>
					<div class="button-view col-md-6 col-xs-6 text-right no-padding">
						<a href="{{ route('experience.profile', $exp['id']) }}" class="btn-view-more"> View More </a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		@endforeach
			<div class="clearfix"></div>
		</div>
		@endif

		@if(count($data['decoration']) > 0)
		<div class="mar-t-30" id="decoration">
			<h1 class="section-title"> Decoration</h1>
			@foreach($data['decoration'] as $decor)
				<div class="col-md-4">
					<div class="card">
						<figure> <img src="{{ url($decor['profile_img']) }}" class="img-responsive"> </figure>
						<div class="card-details">
							<h6>{{ $decor['city'] }} </h6>
							<h4> <a href="{{ route('decoration.profile', $decor['id']) }}">{{ $decor['name'] }}  </a></h4>
							<div class="price col-md-6 col-xs-6 no-padding">
								<span class="rupee"> Rs </span> <span class="num">{{ $decor['price'] }}  </span>
								@if($decor['is_per_head'])
									<span class="per-head"> Per Head </span>
								@endif
							</div>
							<div class="button-view col-md-6  col-xs-6 text-right no-padding">
								<a href="{{ route('decoration.profile', $decor['id']) }}" class="btn-view-more"> View More </a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
		@endif

		@if(count($data['banquets']) > 0)
		<div class="mar-t-30" id="banquets">
			<h1 class="section-title"> Banquets</h1>
			@foreach($data['banquets'] as $banquets)
				<div class="col-md-4">
					<div class="card">
						<figure> <img src="{{ url($banquets['profile_img']) }}" class="img-responsive"> </figure>
						<div class="card-details">
							<h6>{{ $banquets['city'] }} </h6>
							<h4> <a href="{{ route('banquets.profile', $banquets['id']) }}">{{ $banquets['name'] }}  </a></h4>
							<div class="price col-md-6 col-xs-6 no-padding">
								<span class="rupee"> Rs </span> <span class="num">{{ $banquets['price'] }}  </span>
								@if($banquets['is_per_head'])
									<span class="per-head"> Per Head </span>
								@endif
							</div>
							<div class="button-view col-md-6 col-xs-6 text-right no-padding">
								<a href="{{ route('banquets.profile', $banquets['id']) }}" class="btn-view-more"> View More </a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
		@endif

		@if(count($data['bachelors_party']) > 0)
			<div class="mar-t-30" id="bachelors-party">
					<h1 class="section-title"> Bachelor's Party</h1>
					@foreach($data['bachelors_party'] as $bachelor)
						<div class="col-md-4">
							<div class="card">
								<figure> <img src="{{ url($bachelor['profile_img']) }}" class="img-responsive"> </figure>
								<div class="card-details">
									<h6> {{ $bachelor['city'] }} </h6>
									<h4> <a href="{{ route('bachelors-party.profile', $bachelor['id']) }}">{{ $bachelor['name'] }}  </a></h4>
									<div class="price col-md-6 col-xs-6 no-padding">
										<span class="rupee"> Rs </span> <span class="num">{{ $bachelor['price'] }}  </span>
										@if($bachelor['is_per_head'])
											<span class="per-head"> Per Head </span>
										@endif
									</div>
									<div class="button-view col-md-6 col-xs-6 text-right no-padding">
										<a href="{{ route('bachelors-party.profile', $bachelor['id']) }}" class="btn-view-more"> View More </a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					@endforeach
				<div class="clearfix"></div>
				</div>
		@endif
	</div>
</section>

	@include('base.why-us')
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('a.page-scroll').bind('click', function (event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});
		});
	</script>
