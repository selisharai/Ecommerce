@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Edit Product</h1>
    <form method="post" action="{{ route('product.update', $product->id) }}">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="text" name="category_id" value="{{ $product->description }}">
        <input type="text" name="category_id" value="{{ $product->image }}">
        <input type="text" name="category_id" value="{{ $product->category_id }}">
        <input type="text" name="category_id" value="{{ $product->subcategory_id }}">
        <input type="text" name="category_id" value="{{ $product->brand_id }}">
        <input type="text" name="category_id" value="{{ $product->price }}">
        <input type="text" name="category_id" value="{{ $product->discount }}">
        <button type="submit">Update</button>
    </form>
@endsection
