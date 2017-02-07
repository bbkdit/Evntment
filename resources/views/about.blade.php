@extends('layouts.master')

@section('content')
	@include('base.header')
<section class="about-header" style="background: url('{{ url('/evmng/img/bg-header-2.jpg') }}') no-repeat; background-size: cover; ">
	<div class="intro-header pos-rel section-home-header">
		<div class="top-content">
			<div class="col-lg-12 col-md-12 col-xs-12 no-padding">
				<h1 class="text-bg text-center">About Us </h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section class="about-text pad-75">
	<p> Eventment is a premium event management firm which operates with market standard quality and highest
		professionalism. We are known in the market for the excellence in service delivery and we believe in putting
		customer's happiness first. Eventment is operational in all kind of event requirement with the best options in
		silicon valley of India. We always strive to be the best in terms of offerings with a vision to keep up the
		standards high. </p>
</section>
	@include('base.why-us')
@endsection
