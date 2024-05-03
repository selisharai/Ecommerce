@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Banner</h1>
    <form method="post" action="{{ route('banner.store') }}">
        @csrf
        <label for="">title</label>
        <input type="text" name="title"> <br>

        <label for="">image</label>
        <input type="text" name="image"> <br>

        <button type="Submit">Create</button>
    @endsection
