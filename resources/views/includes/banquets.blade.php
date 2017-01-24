
                 <div class="col-md-8">
                <h2>Add Banquets</h2><br>
                @if(Session::has('success'))
                <div class="alert alert-success">
                   {{ Session::get('success') }}
               </div>
                @endif

      
 <form method="post" action="{{ url('/admin/add/banquets') }}">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" id="cat_id" name="cat_id" value="{{$id}}">
 
 <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="name" name="name" required="required">
</div>
<div class="form-group">
  <label for="pwd">minimum price:</label>
  <input type="text" class="form-control" id="" name="min_price">
</div>
<div class="form-group">
  <label for="usr">maximum price:</label>
  <input type="text" class="form-control" id="" name="max_price">
</div>
<div class="form-group">
  <label for="pwd">price:</label>
  <input type="" class="form-control" id="" name="price">
</div>

<div class="checkbox">
  <label><input type="checkbox" value="1" name="is_neg"><b>is negotiable</b> </label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="1" name="is_perhead"><b>is perhead</b> </label>
</div>
<div class="form-group">
  <label for="">Description:</label>
  <textarea id="txtEditor" class="form-control" rows="5" name="desc" value="{{old('desc')}}"></textarea><br>
</div>
<div class="form-group">
  <label for="">city:</label>
  <input type="text" class="form-control" id="" name="city">
</div>
<div class="form-group">
  <label for="">area:</label>
  <input type="text" class="form-control" id="" name="area">
</div>
<div class="form-group">
  <label for="">duration:</label>
  <input type="text" class="form-control" id="" name="duration">
</div>
<div class="form-group">
  <label for="">Booking terms:</label>
  <textarea id="txtEditor" class="form-control" rows="6" name="booking_terms" value="{{old('booking_terms')}}"></textarea><br>
  <div class="form-group">
  <label for="">minimum capacity:</label>
  <input type="text" class="form-control" id="" name="min_capacity">
</div>
<div class="form-group">
  <label for="">maximum capacity:</label>
  <input type="text" class="form-control" id="" name="max_capacity">
</div>
</div>

<div class="form-group">
  <button class="btn btn-primary" type="submit">save</button>
 
</div>

  
</form>
</div>
<div class="col-sm-4"><br><br>
  <h4> Banquets list</h4>
  <br>
   <ul class="list-group">
   @foreach($banquet as $deco)
    
  <li class="list-group-item">
  <h4>{{$deco->name}}</h4>
  <a class="btn btn-success" href="{{ url('admin/add/image')}}/{{$id}}/{{$deco->id}}"><b style="color:;">Add Images</b></a>
  <a class="btn btn-info" href="">Edit</a>
  <a class="btn btn-danger" href="">Delete</a></li></li>

  @endforeach
   </ul>
</div>