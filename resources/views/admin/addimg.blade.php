@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add image To <b>{{$exp->name}}</b></div>

                <div class="panel-body">
                    <form action="{{ url('/admin/add/img')}}" class="dropzone" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="item_id" value="{{$exp->id}}">
                        <input type="hidden" name="cat_id" value="{{$c_id}}">

                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>Detaile of {{$exp->name}}</h3><br>
             <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>price:</b> {{$exp->min_price}}</td>
        </tr>
        <tr>
        <td>{{$exp->max_price}}</td>
        </tr>
        <td>{{$exp->price}}</td>
        <td>{{$exp->description}}</td>
        <td>{{$exp->city}}</td>
        <td>{{$exp->area}}</td>
      </tr>
      </tbody>
      </table>
        </div>
    </div>
</div>
@endsection

  
