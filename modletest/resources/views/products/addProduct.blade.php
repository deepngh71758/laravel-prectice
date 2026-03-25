@extends('layouts.app')
@section('Addproduct')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h4>Add Product</h4>
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
                        <form action="/products" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Product Name -->
                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    class="form-control" 
                                    value="{{ old('name') }}" 
                                    required>
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input 
                                    type="text" 
                                    name="price" 
                                    class="form-control" 
                                    value="{{ old('price') }}" 
                                    required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Detail</label>
                                <textarea 
                                    name="detail" 
                                    class="form-control" 
                                    rows="3">{{ old('Detail') }}</textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label">Product Image</label>
                                <input 
                                    type="file" 
                                    id="img"
                                    name="img" 
                                    class="form-control">
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Add Product
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection