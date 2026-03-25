@extends('layouts.app')
@section('editproduct')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h4>Edit Product</h4>
                    </div>

                    <div class="card-body">

                        <!-- Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form -->
                        <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Product Name -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    class="form-control" 
                                    value="{{ old('name', $product->name) }}" 
                                    required>
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input 
                                    type="number" 
                                    name="price" 
                                    class="form-control" 
                                    value="{{ old('price', $product->price) }}" 
                                    required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea 
                                    name="detail" 
                                    class="form-control" 
                                    rows="3">{{ old('description', $product->detail) }}</textarea>
                            </div>

                            <!-- Current Image -->
                            @if($product->img)
                                <div class="mb-3">
                                    <label class="form-label">Current Image</label><br>
                                    <img src="{{ asset('storage/' . $product->img) }}" width="120" class="mb-2">
                                </div>
                            @endif

                            <!-- New Image -->
                            <div class="mb-3">
                                <label class="form-label">Change Image</label>
                                <input 
                                    type="file" 
                                    id="img"    
                                    name="img" 
                                    class="form-control">
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between">
                                <a href="/" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    Update Product
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection