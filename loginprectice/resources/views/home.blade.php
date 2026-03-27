@extends('layouts.app')

@section('content')

{{-- HERO SECTION --}}
<section class="bg-gray-900 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Welcome to MyApp 
        </h1>
        <p class="text-lg text-gray-300 mb-8">
            Build amazing web applications .
        </p>

        <div class="space-x-4">
            <a href="#" class="bg-blue-500 px-6 py-3 rounded-lg hover:bg-blue-600">
                Get Started
            </a>
            {{-- <a href="/login" class="border border-gray-400 px-6 py-3 rounded-lg hover:bg-gray-800">
                Login
            </a> --}}
        </div>
    </div>
</section>

{{-- FEATURES SECTION --}}
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-10">Features</h2>

        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-semibold mb-3"> Fast</h3>
                <p class="text-gray-600">
                    Laravel provides blazing fast performance and smooth experience.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-semibold mb-3"> Secure</h3>
                <p class="text-gray-600">
                    Built-in authentication and security features to protect your app.
                </p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-semibold mb-3"> Beautiful UI</h3>
                <p class="text-gray-600">
                    Tailwind CSS makes designing modern UI super easy.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection