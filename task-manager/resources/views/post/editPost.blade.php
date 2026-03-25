@extends("layouts.app")
@section('edit_post')
<div class="container w-50">
    <h1>Edit post {{ $id }}</h1>
    <form class="mt-3" action="/post/updatePost/{{ $id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
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
</div>
@endsection