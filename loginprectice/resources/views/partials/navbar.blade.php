<nav class="bg-gray-900 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            
            {{-- Logo  --}}
            <div class="text-xl font-bold">
                <a href="/">MyApp</a>
            </div>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex space-x-6 items-center">
                <a href="/home" class="hover:text-gray-300">Home</a>
                <a href="/blogs" class="hover:text-gray-300">Blogs</a>
                <a href="/dashboard" class="hover:text-gray-300">Dashboard</a>

                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="bg-red-500 px-3 py-1 rounded hover:bg-red-600">
                            Logout
                        </button>
                    </form>
                {{-- @else
                    <a href="/login" class="hover:text-gray-300">Login</a>
                    <a href="/register" class="bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">
                        Register
                    </a> --}}
                @endauth
            </div>

            {{-- Mobile Button --}}
            <div class="md:hidden">
                <button id="menu-btn" class="focus:outline-none">
                    ☰
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
        <a href="/home" class="block py-2">Home</a>
        <a href="/dashboard" class="block py-2">Dashboard</a>

        @auth
            <form method="POST" action="/logout">
                @csrf
                <button class="w-full text-left bg-red-500 px-3 py-1 rounded mt-2">
                    Logout
                </button>
            </form>
        {{-- @else
            <a href="/login" class="block py-2">Login</a>
            <a href="/register" class="block py-2 bg-blue-500 rounded mt-2 text-center">
                Register
            </a> --}}
        @endauth
    </div>
</nav>