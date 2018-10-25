@extends('layouts.admin')

@section('title', 'Category List')

@section('content')
    <div class="row mb-2">
        <div class="col text-right">
            <a href="{{ route('category.create') }}" class="btn btn-success">New Category</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($model as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection