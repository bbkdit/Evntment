
@extends('layouts.master')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <h3>Detaile of {{$exp->name}}</h3><br>
            <div class="col-md-8">
                
              
            @foreach($image as $img)
              <a href="{{url($img->file_path)}}" data-lightbox="roadtrip">
              
              <img src="{{url($img->file_path)}}" class="img-rounded" alt="Cinque Terre" width="200" height="200">
              </a>
            @endforeach
            </div>
            <div class="col-md-2">
             <h4 style="color: #c6c6c6;">{{$exp->name}}</h4>
             <table class="table">
            
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>price:</b> {{$exp->price}}</td>
        </tr>
        <tr>
        <td><b> Minimum price:</b> {{$exp->min_price}}</td>
        </tr>
        <tr>
        <td><b>Maximum price:</b> {{$exp->max_price}}</td>
        </tr>
        <tr>
        <td><b>Desc:</b> {{$exp->description}}</td>
        </tr>
        <tr>
        <td><b>City:</b> {{$exp->city}}</td>
        </tr>
        <tr>
        <td><b>Area</b> {{$exp->area}}</td>
      </tr>
      </tbody>
      </table>
      </div>
        </div>
    </div>
</div>
@endsection



  
