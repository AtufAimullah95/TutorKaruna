<html>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
<body>

    <div>
    <h1 class="display-3">Show Product</h1>
    <a class="btn btn-primary" href="/" role="button">Back</a>  
    <h3 class="display-6">Product Name: {{$user->name}} <br></h3>
    <h3 class="display-6">Price RM: {{$user->price}} <br></h3>
    <h3 class="display-6">Details: {{$user->description}}<br></h3>
    <h3 class="display-6">Publish:
        @if ($user->publish == 1)
        Yes
        @else
        No            
      @endif<br></h3>
 
    </div>
</body>

</html>
