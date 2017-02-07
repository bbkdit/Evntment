@extends('layouts.master')
@section('custom-head')
	<link href="{{url('evmng/css/thumbnail-slider.css')}}" rel="stylesheet" />
	<link href="{{url('evmng/css/ninja-slider.css')}}" rel="stylesheet" />
@show
@include('base.header')
@section('content')

@endsection

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" crossorigin="anonymous"></script>
<script src="{{url('evmng/js/thumbnail-slider.js')}}"></script>
<script src="{{url('evmng/js/ninja-slider.js')}}"></script>
<script>
	$(document).ready(function(){

	});
</script>
@endsection
