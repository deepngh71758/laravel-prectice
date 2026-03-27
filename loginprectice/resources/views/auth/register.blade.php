@extends('layouts.guest')

@section('register')

<div class="min-h-screen flex items-center justify-center bg-gray-900 px-4">
    
    {{-- Card --}}
    <div class="w-full max-w-md bg-gray-800 rounded-2xl shadow-lg p-8">
        
        {{-- Heading --}}
        <h2 class="text-2xl font-bold text-white text-center mb-6">
            Create an account
        </h2>

        {{-- Form --}}
        <form id="registration_form" method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            {{-- Name --}}
            <div>
                <input 
                    id="name"
                    type="text" 
                    name="name" 
                    value="{{ old('name') }}"
                    placeholder="Name"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    
                >

                <p class="text-sm text-red-500 mt-1 name_error hidden"></p>
                @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    
                @enderror
            </div>

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
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    
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
                    required
                >

                <p class="text-sm text-red-500 mt-1 password_error hidden"></p>
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <input 
                    id="confirm_password"
                    type="password" 
                    name="password_confirmation" 
                    placeholder="Confirm Password"
                    class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >

                <p class="text-sm text-red-500 mt-1 confirm_password_error hidden"></p>
                @error('password_confirmation')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    
                @enderror
            </div>

            {{-- Button --}}
            <button 
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition duration-200"
            >
                Register
            </button>
        </form>

        {{-- Login Link --}}
        <p class="text-sm text-gray-400 text-center mt-6">
            Already have an account?
            <a href="/login" class="text-blue-400 hover:underline">Login</a>
        </p>

    </div>
</div>

@endsection