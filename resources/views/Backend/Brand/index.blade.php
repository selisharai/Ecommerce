@extends('Backend.layouts.headerfooter')
@section('body-content')
    <div class="container">
        <h2>Brand Table</h2>
        <a class="btn-success" href="{{ route('brand.create') }}">Add Brand</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->image }}</td>
                        <td>
                            <img class="image" style="height:40px; width:50px" src="{{ asset($data->image) }}"
                                alt="">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('brand.edit', $data->id) }}" role="button">Edit</a>
                            <form method="POST" action="{{ route('brand.destroy', $data->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endsection
