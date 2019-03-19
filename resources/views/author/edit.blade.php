@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Author
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('authors.update', $author->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Author Name:</label>
              <input type="text" class="form-control" name="name" value="{{$author->name}}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone Number :</label>
              <input type="text" class="form-control" name="phone" value="{{$author->phone}}"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender :</label>
              <input type="text" class="form-control" name="gender" value="{{$author->gender}}"/>
          </div>
          <div class="form-group">
              <label for="address">Address :</label>
              <input type="text" class="form-control" name="address" value="{{$author->address}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Author</button>
      </form>
  </div>
</div>
@endsection