@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Product</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name"> <br>

        <label for="">Description</label>
        <input type="text" name="description"> <br>

        <label for="">Image</label>
        <input type="text" name="image"> <br>

        <label for="">Category_id</label>

        <select name="category_id" id="">
            <option value="">select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select> <br>

        <label for="">Subcategory_id</label>
        <select name="subcategory_id" id="">
            <option value="">select Subcategory</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select> <br>


        <label for="">Brand_id</label>
        <select name="subcategory_id" id="">
            <option value="">select Brand</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select> <br>


        <label for="">Price</label>
        <input type="text" name="price"> <br>

        <label for="">Discount</label>
        <input type="text" name="discount"> <br>

        <label for="">category_id</label>
        <br>
        <button type="Submit">Create</button>
    </form>
@endsection
