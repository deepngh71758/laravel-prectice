{{-- ADD BLOG MODAL --}}
@if($errors->any())
    <div id="blogModal" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
@else
    <div id="blogModal" class="fixed inset-0 bg-black/60 hidden items-center justify-center z-50">
@endif

    <div class="bg-gray-800 w-full max-w-lg rounded-2xl p-6 relative">

        {{-- Close Button --}}
        <button id="closeModal" class="absolute top-4 right-6 text-gray-400 hover:text-white">
            ✕
        </button>

        {{-- Title --}}
        <h2 class="text-2xl text-white font-bold mb-4">Create Blog</h2>

        {{-- Form --}}
        <form method="POST" action="/blogs" enctype="multipart/form-data" class="space-y-4">
            @csrf

            {{-- Title --}}
            <div>
                <input type="text" name="title" placeholder="Blog Title"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            @error('title')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
            

            {{-- Content --}}
            <div>
                <textarea name="content" rows="4" placeholder="Blog Content"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            @error('content')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror

            <div class="flex justify-between items-center">
            {{-- Image --}}
            <div>
                <label for="blogimg" class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">Select Image <input type="file" name="blogimg" id="blogimg" hidden></label>
            </div>
            {{-- Button --}}
            <button type="submit"
                class=" bg-blue-500 hover:bg-blue-600 py-2 rounded-lg font-semibold text-white px-4">
                Post
            </button>
            </div>
            @error('blogimg')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </form>

    </div>
</div>