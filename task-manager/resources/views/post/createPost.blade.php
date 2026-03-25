{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body> --}}
@extends('layouts.app')

@section('create_post')
<div class="container w-50">
  <h1>Create post</h1>

    <form class="mt-3" action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text"  id="username" name="username" class="form-control" value="{{ old('username') }}">
        <span class="text-danger">
          @error('username')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label  class="form-label">useremail</label>
        <input type="text"  id="useremail" name="useremail" class="form-control" value="{{ old('useremail') }}">
        <span class="text-danger">
          @error('useremail')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label  class="form-label">photo</label>
        <input type="file"  id="photo" name="photo" class="form-control" value="{{ old('photo') }}">
        <span class="text-danger">
          @error('photo')
          {{ $message }}
          @enderror
        </span>
      </div>
      {{-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> --}}
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<br><br>
@endsection


{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html> --}}