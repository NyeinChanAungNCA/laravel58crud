@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Author
  </div>
  <div class="card-body">
    <!-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif -->
      <form method="post" action="{{ route('authors.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Author Name:</label>
              <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus />
              @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group">
              <label for="phone">Phone Number :</label>
              <input type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"/>
              @if ($errors->has('phone'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('phone') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group">
              <label>Gender :</label>
              <div class="radio">
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="Male" name="gender">Male
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="Female" name="gender">Female
                  </label>
                </div>
              </div>
              @if ($errors->has('gender'))
                  <span style="color: #ff0000;" role="alert">
                      <strong>{{ $errors->first('gender') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group">
              <label for="address">Address :</label>
              <input type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}"/>
              @if ($errors->has('address'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
              @endif
          </div>
          <button type="submit" class="btn btn-primary">Create Author</button>
      </form>
  </div>
</div>
@endsection