@extends('layouts.admin')

@section('title', 'Edit file')

@section('content')
    <form method="POST" action="{{ route('photos.update', $model->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-header bg-white font-weight-bold">Edit file</div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{ $model->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image File</label>
                    <div class="col-sm-10">
                        <img src="{{ asset('uploads/' . $model->image) }}" class="img-fluid">
                        <input class="form-control" placeholder="Name" name="image_file" type="file">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <a href="{{ route('photos.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection