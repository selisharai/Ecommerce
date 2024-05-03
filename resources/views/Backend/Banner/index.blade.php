@extends('Backend.layouts.headerfooter')
@section('body-content')
    <div class="container">
        <h2>Banner Table</h2>
        <a class="btn-success" href="{{ route('banner.create') }}">Add Banner</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->image }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('banner.edit', $data->id) }}" role="button">Edit</a>
                            <form method="POST" action="{{ route('banner.destroy', $data->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endsection
