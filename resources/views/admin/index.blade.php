@extends('layouts.app')
@section('title')
  <title>Dashboard</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard </div><br>
                <div class="panel-body">
             

             
  
  
   <div class="col-md-3">
   <h3>Category</h3><br>
   <ul class="list-group">
   @foreach($category as $categor)
    
  <li class="list-group-item"><a href="{{ url('admin/add')}}/{{$categor->id}}"><b>Add</b> {{$categor->name}}</a></li>

  @endforeach
   </ul>
    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
