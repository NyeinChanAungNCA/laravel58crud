@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <a href="{{ route('footballers.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Footballer</a>
  </div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Footballer Name</td>
          <td>Club</td>
          <td>Country</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($footballers as $footballer)
        <tr>
            <td>{{$footballer->id}}</td>
            <td>{{$footballer->footballername}}</td>
            <td>{{$footballer->club}}</td>
            <td>{{$footballer->country}}</td>
            <td><a href="{{ route('footballers.edit',$footballer->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('footballers.destroy', $footballer->id)}}" method="post">
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