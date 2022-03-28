@extends('layout')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Details</th>
        <th scope="col">Publish</th>
        <th scope="col" style="text-align:center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Users as $key=>$user)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->price }}</td>
        <td>{{ $user->description }}</td>
        <td>
          @if ($user->publish == 1)
            Yes
            @else
            No            
          @endif

        </td>
         
        <td><a class="btn btn-primary" href="/user/view/{{$user->id}}">View</a></td>
        <td><a class="btn btn-primary" href="/user/edit/{{$user->id}}">Edit</a></td>
        <td><a class="btn btn-primary" href="/user/delete/{{$user->id}}">Delete</a></td>
        
      </tr>
      @endforeach
    </tbody>
    
  </table>

  <a class="btn btn-primary" href="/user/create">Add</a>
  
@stop

