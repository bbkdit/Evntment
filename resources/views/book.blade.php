@extends('layouts.master')

@section('content')
	@include('base.header')
<section class="about-header" style="background: url('{{ url('/evmng/img/book.jpg') }}') no-repeat; background-size: cover; ">
	<div class="intro-header pos-rel section-home-header">
		<div class="top-content">
			<div class="col-lg-12 col-md-12 col-xs-12 no-padding">
				<h1 class="text-bg text-center">Book Now</h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
	<section class="book now">
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfguYA9JCa7e7tE6mVV6YvK-mGZMEuH6LtJy-B_QbYEBl7rpA/viewform?embedded=true" width="100%" height="570" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
	</section>
	@include('base.why-us')
@endsection
