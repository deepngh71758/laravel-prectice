@extends('layouts.guest')

@section('login')

<div class="min-h-screen min-w-screen flex items-center justify-center bg-gray-900 px-4">
    
    {{-- Card --}}
    <div class="w-full max-w-md bg-gray-800 rounded-2xl shadow-lg p-8">
        <div class="mb-6">
        {{-- Heading --}}
        <h2 class="text-2xl font-bold text-white text-center ">
            Login to your account
        </h2>
        @error('failed')
            <p class="text-sm text-red-500 text-center mt-2 ">{{ $message }}</p>
        @enderror
        </div>

        {{-- Form --}}
        <form id="login_form" method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            {{-- Email --}}
            <div>
                <input 
                    id="email"
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    placeholder="Email"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >

                <p class="text-sm text-red-500 mt-1 email_error hidden"></p>
                @error('email')
                    <p class="text-sm text-red-500 mt-1 ">{{ $message }}</p>
                    
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <input 
                    id="password"
                    type="password" 
                    name="password" 
                    placeholder="Password"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    
                >

                <p class="text-sm text-red-500 mt-1 password_error hidden"></p>
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    
                @enderror
            </div>

            {{-- Button --}}
            <button 
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200"
            >
                Login
            </button>
        </form>

        {{-- General Errors
        @if($errors->any())
            <div class="mt-4 text-center">
                @foreach($errors->all() as $error)
                    <p class="text-sm text-red-400">{{ $error }}</p>
                @endforeach
            </div>
        @endif --}}

        {{-- Register Link --}}
        <p class="text-sm text-gray-400 text-center mt-6">
            Don't have an account?
            <a href="/register" class="text-blue-400 hover:underline">Register</a>
        </p>

    </div>
</div>

@endsection