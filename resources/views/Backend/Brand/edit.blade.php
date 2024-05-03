@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Edit Brand</h1>
    <form method="post" action="{{ route('brand.update', $brand->id) }}">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $brand->name }}">
        <input type="file" name="image" value="{{ $brand->image }}">
        <button type="submit">Update</button>
    </form>
@endsection
