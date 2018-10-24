@extends('layouts.admin')

@section('title', 'Upload new file')

@section('content')
    <form>
        <div class="card">
            <div class="card-header bg-white font-weight-bold">
                Upload new file
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image File</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" type="file">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection