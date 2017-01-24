
                 <div class="col-sm-6">
                <h2>Add Experience</h2><br>
                @if(Session::has('success'))
                <div class="alert alert-success">
                   {{ Session::get('success') }}
               </div>
                @endif


 <form method="post" action="{{ url('/admin/add') }}">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <input type="hidden" id="cat_id" name="cat_id" value="1">
 
 <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="name" name="name">
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
<div class="form-group">
  <label for="">Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="1" name="is_neg"><b>is negotiable</b> </label>
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
  <label for="usr">slug:</label>
  <input type="text" class="form-control" id="" name="slug_n">
</div>
<div class="form-group">
  <button class="btn btn-primary" type="submit">save</button>
 
</div>

  
</form>
</div>
<div class="col-sm-6"><br><br>
 <h4>Experience list</h4>
  <br>
   <ul class="list-group">
   @foreach($experience as $experianc)
    
  <li class="list-group-item">
  <h4>{{$experianc->name}}</h4>
  <a class="btn btn-success" href="{{ url('admin/add/image')}}/{{1}}/{{$experianc->id}}"><b style="color: ;">Add images</b></a>
  <a class="btn btn-info" href="">Edit</a>
  <a class="btn btn-danger" href="delete/{{$experianc->id}}">Delete</a></li>

  @endforeach
   </ul>
</div>
