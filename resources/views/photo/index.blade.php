@extends('layouts.admin')

@section('title', 'Photo List')

@section('content')
    <div class="row mb-2">
        <div class="col text-right">
            <a href="{{ route('photos.create') }}" class="btn btn-success">New File</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th></th>
            <th>Name</th>
            <th>File</th>
            <th>Action</th>
        </tr>
        @foreach($model as $photo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $photo->name }}</td>
                <td><img src="{{ asset('uploads/' . $photo->image) }}" class="img-fluid" width="100px"></td>
                <td>
                    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection