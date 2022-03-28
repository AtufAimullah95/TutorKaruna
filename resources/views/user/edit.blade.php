<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  


@extends('layout')

@section('content')

<form action="/user/saveEdit/{{$user->id}}" method="post">
    @csrf
    Product: <br>
    <input type="text" value="{{$user->name}}" placeholder="Product Name" name='name'><br>
    Price RM: <br>
    <input type="text" value="{{$user->price}}" placeholder="Price" name='price'> <br>
    Detail: <br>
    <input type="text" value="{{$user->description}}" placeholder="Detail" name='description'> <br>
    Publish: <br>
    
        @if ($user->publish == 1)
        <div class="form-check">
        <input class="form-check-input" type="radio" value="1" name="publish"  checked>
        <label class="form-check-label" >
          Yes
        </label>
    </div>

    <div>
    <div class="form-check">
            <input class="form-check-input" type="radio" value="0" name="publish"  >
            <label class="form-check-label" >
             No
            </label>
        </div>
    
        <div>
        @else
        <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="publish" >
            <label class="form-check-label" >
              Yes
            </label>
        </div>
    
        <div>
        <div class="form-check">
                <input class="form-check-input" type="radio" value="0" name="publish" checked>
                <label class="form-check-label" >
                 No
                </label>
            </div>
        
            <div>

        @endif
     
    <button type="submit" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="/" role="button">Back</a> 

    </div>
</form>




@stop