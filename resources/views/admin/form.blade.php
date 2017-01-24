@extends('layouts.app')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{url('css/editor.css')}}" type="text/css" rel="stylesheet"/>



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default col-md-12">

            @if (count($errors) > 0)
           <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
         @endif

            @if ($id == 1)
    
            @include('includes.experience')

           @elseif ($id == 2)
           @include('includes.decoration')
           @elseif ($id == 3)
           @include('includes.rooms')
           @elseif ($id == 4)
           @include('includes.conferenceform')
           @elseif ($id == 5)
           @include('includes.banquets')
            @else
             @include('includes.bachloreform')
            @endif
               

                
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="{{url('js/editor.js')}}"></script>
<script type="text/javascript">
$(document).ready( function() {
$("#txtEditor").Editor();                    
});
</script>
@endsection

