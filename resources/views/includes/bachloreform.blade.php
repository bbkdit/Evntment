
                 <div class="col-md-6">
                <h2>Add Bachlore's party</h2><br>
                @if(Session::has('success'))
                <div class="alert alert-success">
                   {{ Session::get('success') }}
               </div>
                @endif

      
 <form method="post" action="{{ url('/admin/add/bachlore') }}">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" id="cat_id" name="cat_id" value="{{$id}}">
 
 <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
</div>
<div class="form-group">
  <label for="pwd">minimum price:</label>
  <input type="text" class="form-control" id="" name="min_price" value="{{old('min_price')}}">
</div>
<div class="form-group">
  <label for="usr">maximum price:</label>
  <input type="text" class="form-control" id="" name="max_price" value="{{old('max_price')}}">
</div>
<div class="form-group">
  <label for="pwd">price:</label>
  <input type="" class="form-control" id="" name="price" value="{{old('price')}}">
</div>

<div class="checkbox">
  <label><input type="checkbox" value="1" name="is_neg"><b>is negotiable</b> </label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="1" name="is_perhead"><b>is perhead</b> </label>
</div>
<div class="form-group">
  <label for="">Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="desc" value="{{old('desc')}}"></textarea>
</div>
<div class="form-group">
  <label for="">city:</label>
  <input type="text" class="form-control" id="" name="city" value="{{old('city')}}">
</div>
<div class="form-group">
  <label for="">area:</label>
  <input type="text" class="form-control" id="" name="area" value="{{old('area')}}">
</div>
<div class="form-group">
  <label for="">duration:</label>
  <input type="text" class="form-control" id="" name="duration" value="{{old('duration')}}">
</div>
<div class="form-group">
  <label for="">Booking terms:</label>
  <textarea class="form-control" rows="5" id="" name="booking_terms" value="{{old('booking_terms')}}"></textarea>
  <div class="form-group">
  <label for="">minimum capacity:</label>
  <input type="text" class="form-control" id="" name="min_capacity" value="{{old('min_capacity')}}">
</div>
<div class="form-group">
  <label for="">maximum capacity:</label>
  <input type="text" class="form-control" id="" name="max_capacity" value="{{old('max_capacity')}}">
</div>
</div>
<div class="form-group">
  <label for="usr">slug:</label>
  <input type="text" class="form-control" id="" name="slug_n" value="{{old('slug_n')}}">
</div>
<div class="form-group">
  <button class="btn btn-primary" type="submit">save</button>
 
</div>

  
</form>
</div>

<div class="col-sm-6"><br><br>
  <h4>Bachlore list</h4>
  <br>
   <ul class="list-group">
   @foreach($bachlore as $deco)
    
  <li class="list-group-item">
  <h4>{{$deco->name}}</h4>
  <a class="btn btn-success" href="{{ url('admin/add/image')}}/{{$id}}/{{$deco->id}}"><b style="color:;">Add Images</b></a>
  <a class="btn btn-info" href="">Edit</a>
  <a class="btn btn-danger" href="delete/{{$id}}/{{$deco->id}}">Delete</a></li></li>

  @endforeach
   </ul>
</div>