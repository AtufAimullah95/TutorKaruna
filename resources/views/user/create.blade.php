@extends('layout')

@section('content')
<a class="btn btn-primary" href="/" role="button">Back</a> 
<form action="/user/save" method="post">
    @csrf
    Product: <br>
    <input type="text" placeholder="Product Name" name='name'><br>
    Price RM: <br>
    <input type="text" placeholder="Price" name='price'><br>
    Detail: <br>
    <input type="text" placeholder="Detail" name='description'><br>  
    Publish: <br>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="1" name="publish" >
        <label class="form-check-label" >
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="0" name="publish" checked>
        <label class="form-check-label" >
          No
        </label>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@stop