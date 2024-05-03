@extends('Backend.layouts.headerfooter')
@section('body-content')
    <h1>Create Brand</h1>
    <form method="post" action="{{ route('brand.store') }}"enctype="multipart/form-data">
        @csrf
        @foreach ($errors->all() as $message)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @endforeach
        <label for="">Name</label>
        <input type="text" name="name"> <br>

        <label for="">image</label>
        <input type="file" name="image"> <br>

        <button type="Submit">Create</button>
    @endsection
