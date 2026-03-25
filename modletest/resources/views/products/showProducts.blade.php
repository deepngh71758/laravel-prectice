@extends('layouts.app')
@section('showproduct')
    <div class="card-header bg-dark text-white p-3 text-center">
        <h4>All Products</h4>
    </div>
    <div class="row mt-5">
    @foreach($products as $product)
    <x-product_card id="{{ $product->id }}" name="{{ $product->name }}" detail="{{ $product->detail }}" price="{{ $product->price }}" img="{{ $product->img }}" />
    @endforeach
    <div>
        {{-- {{ $products->links() }} --}}
    </div>
    </div>
    <div class="container d-flex justify-content-end">
    <a href="/products/create" class="btn btn-primary">add product</a>
    </div>
@endsection