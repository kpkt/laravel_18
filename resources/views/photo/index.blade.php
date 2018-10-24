@extends('layouts.admin')

@section('title', 'Photo List')

@section('content')
    <a href="" class="btn btn-success">New File</a>
    <table class="table table-bordered table-striped">
        <tr>
            <th></th>
            <th>Name</th>
            <th>File</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>File 1</td>
            <td>Image File</td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    </table>
@endsection