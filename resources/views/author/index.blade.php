@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Author Name</td>
          <td>Phone Number</td>
          <td>Gender</td>
          <td>Address</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>{{$author->id}}</td>
            <td>{{$author->name}}</td>
            <td>{{$author->phone}}</td>
            <td>{{$author->gender}}</td>
            <td>{{$author->address}}</td>
            <td><a href="{{ route('authors.edit',$author->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('authors.destroy', $author->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection