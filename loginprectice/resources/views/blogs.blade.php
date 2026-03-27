@extends('layouts.app')

@section('content')

<section class="blogs">

@include('partials.addpost')

{{-- Heading --}}
<div class="bg-gray-900 text-white py-20">
    <div class="  max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Latest Blogs </h1>
        <p class="text-lg text-gray-300 mb-8">Read our latest articles and updates</p>
        <button id="openModal" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg">
            Add Blog
        </button>
    </div>
</div>

<div class="max-w-7xl py-10 px-4 mx-auto ">

    {{-- Add sorting and filtering --}}
    <form action="/blogs" method="GET" 
    class="max-w-7xl mx-auto mb-8 bg-gray-800 p-4 rounded-xl shadow flex flex-col md:flex-row gap-4 items-center justify-around">

        {{-- Search --}}
        <input 
            type="text" 
            name="search_blog" 
            value="{{ request('search_blog') }}"
            placeholder="Search by title..."
            class="w-full md:w-1/3 px-4 py-2 rounded-lg bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >

        {{-- Filter by User --}}
        <select 
            name="user_id" 
            onchange="this.form.submit()"
            class="w-full md:w-auto px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="">All Users</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" 
                    {{ request('user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>

        {{-- Order By --}}
        <select 
            name="order_by" 
            onchange="this.form.submit()"
            class="w-full md:w-auto px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="id">Sort By</option>
            <option value="id" {{ request('order_by') == 'id' ? 'selected' : '' }}>Blog ID</option>
            <option value="title" {{ request('order_by') == 'title' ? 'selected' : '' }}>Title</option>
            <option value="user_id" {{ request('order_by') == 'user_id' ? 'selected' : '' }}>User</option>
        </select>

        {{-- Order Direction --}}
        <select 
            name="order" 
            onchange="this.form.submit()"
            class="w-full md:w-auto px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>
                Ascending
            </option>
            <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>
                Descending
            </option>
        </select>

        {{-- Button --}}
        <button 
            type="submit"
            class="w-full md:w-auto text-white bg-blue-500 hover:bg-blue-600 px-5 py-2 rounded-lg font-semibold transition"
        >
            Search
        </button>

    </form>
    {{-- Blog Grid --}}
    <div class="max-w-7xl mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3 mb-8">
        {{-- Blog Card --}}
        @foreach ($blogs as $blog)
        <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
            
            {{-- Image --}}
            <div class="h-48 bg-gray-700 flex items-center justify-center">
                <img src="{{ asset('storage/' . $blog->blogimg) }}" alt="blog image" class="text-white object-cover size-full opacity-70">
                {{-- <span class="text-gray-400">{{ $blog->blogimg }}</span> --}}
            </div>

            {{-- Title --}}
            <div class="p-5">
                <div class="flex justify-between items-center mb-2">
                <h2 class="text-xl text-white font-semibold ">
                   {{ $blog->title }}
                </h2>
                 <h2 class="text-xl text-white font-semibold ">
                    {{ $blog->user->name }}
                </h2>
                </div>

                {{-- content --}}
                <p class="text-gray-400 text-sm mb-4">
                    {{ $blog->content }}
                </p>
                
                <a href="#" class="text-blue-400 hover:underline">
                    edit
                </a>
               
            </div>
        </div>
        @endforeach
    </div>
    {{-- @if ($blogs->count()>=3) --}}
        {{$blogs->links()}}
    {{-- @endif --}}
</div>

</section>

@endsection