@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Edit Banner</h1>
    <form method="post" action="{{ route('banner.update', $banner->id) }}">
        @csrf
        @method('put')
        <input type="text" name="title" value="{{ $banner->title }}">
        <input type="text" name="image" value="{{ $banner->image }}">
        <button type="submit">Update</button>
    </form>
@endsection
