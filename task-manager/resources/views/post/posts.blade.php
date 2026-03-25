@extends('layouts.app')
@section('all_posts')
    <div class="container w-50 d-flex flex-column gap-3 justify-content-center align-items-center ">
        <h1> All posts</h1>
        <a href="{{ route('createpost') }}" class="btn btn-primary">Create a new post</a>
        <div class="row gap-3 justify-content-center">
            @foreach($posts as $post)
            <div class="card " style="width: 18rem;">
            <img src="{{ asset('storage/' .$post->img) }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title">id = {{ $post->id }}</h5>
                <h5 class="card-title">name = {{ $post->name }}</h5>
                <p class="card-text">email = {{ $post->email }}</p>
            </div>
            <div class="card-body">
                <a href="/post/editPost/{{ $post->id }}" class="card-link">edit</a>
                <a href="/deletePost/{{ $post->id }}" class="card-link">delete</a>
            </div>
            </div>
            @endforeach
        </div>
        <div class="mt-5"></div>
        {{-- {{ $posts->links() }} --}}
        {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
@endsection

