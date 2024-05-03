@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Edit Subcategory</h1>
    <form method="post" action="{{ route('subcategory.update', $subcategory->id) }}">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $subcategory->name }}">
        <input type="text" name="category_id" value="{{ $subcategory->category_id }}">
        <button type="submit">Update</button>
    </form>
@endsection
