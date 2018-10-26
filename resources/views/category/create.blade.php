@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-header bg-white font-weight-bold">Add Category</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" name="name" type="text">
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection