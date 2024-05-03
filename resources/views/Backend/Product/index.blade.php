@extends('Backend.layouts.headerfooter')
@section('body-content')
    <div class="container">
        <h2>Product Table</h2>
        <a class="btn-success" href="{{ route('product.create') }}">Add Product</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category_id</th>
                    <th scope="col">Subcategory_id</th>
                    <th scope="col">Brand_id</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->category ? $product->category->name : 'null' }}</td>
                        <td>{{ $product->subcategory ? $product->subcategory->name : 'null' }}</td>
                        <td>{{ $product->brand ? $product->brand->name : 'null' }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}"
                                role="button">Edit</a>
                            <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endsection
