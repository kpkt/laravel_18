@extends('layouts.admin')

@section('title', 'Edit file')

@section('content')
    <form method="POST" action="{{ route('category.update', $model->id) }}">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-header bg-white font-weight-bold">Edit Category</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{ $model->name }}">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection