@extends('Backend.layouts.headerfooter')
@section('body-content')
    <div class="container">
        <h2>Subcategory Table</h2>
        <a class="btn-success" href="{{ route('subcategory.create') }}">Add Subcategory</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category name</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->category ? $data->category->name : 'undefined' }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('subcategory.edit', $data->id) }}"
                                role="button">Edit</a>
                            <form method="POST" action="{{ route('subcategory.destroy', $data->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endsection
