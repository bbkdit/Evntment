@extends('layouts.master')
@section('content')
	@include('base.header')
<section class="about-header" style="background: url('{{ url('/evmng/img/bg-header-2.jpg') }}') no-repeat; background-size: cover; ">
	<div class="intro-header pos-rel section-home-header">
		<div class="top-content">
			<div class="col-lg-12 col-md-12 col-xs-12 no-padding">
				<h1 class="text-bg text-center">Frequently Asked Questions </h1>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<section class="about-text pad-75">
	<h4> What is Eventment ? </h4>
	<p> Eventment is Bangalore's one of the premium event management company with a team of industry experts. Our team is a team of geekie techies who want to create memory more than a event. </p>
	<h4> Who can use Eventment ?</h4>
	<p>Anybody who want to find and book the best event manager for their party without wasting much of their time, money and effort. </p>
	<h4>What kind of event you cover ?</h4>
	<p> We are into all major events from birthday party to wedding, naming ceremony to anniversary celebration. We are always ready for customization. </p>
	<h4>Do you handle bookings? What is the booking process ?</h4>
	<p> Yes, we do handle bookings. Once you submit an enquiry, our team schedules a call or meeting with you. Once you are assured of our services then you can book us with advance token. </p>
	<h4>What is your cancellation policy?</h4>
	<p> The 50 % of token advance you pay at the time of booking is non-refundable. Ex. If you have paid INR 1,000 as advance and if you cancel then INR 500 is refundable.</p>
</section>
	@include('base.why-us')
@endsection

