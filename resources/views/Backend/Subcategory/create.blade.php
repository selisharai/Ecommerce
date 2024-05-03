@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Sub-Category</h1>
    <form method="post" action="{{ route('subcategory.store') }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name"> <br>

        <label for="">Category_id</label>
        <input type="text" name="category_id"> <br>

        <button type="Submit">Create</button>
    </form>
@endsection
