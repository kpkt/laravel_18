@extends('layouts.admin')

@section('title', 'Edit Income')

@section('content')
    <form method="POST" action="{{ route('income.update', $model->id) }}">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-header bg-white font-weight-bold">Edit Income</div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option>-- Select Category --</option>
                            @foreach(\App\Category::all() as $category)
                                <option value="{{ $category->id }}" @if($category->id == $model->category_id) selected @endif >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="text-danger">{{ $errors->first('category_id') }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" name="name" type="text" value="{{ $model->name }}">
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Amount" name="amount" type="text" value="{{ $model->amount }}">
                        <div class="text-danger">{{ $errors->first('amount') }}</div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input class="form-control datepicker" placeholder="Date: DD-MM-YYYY" name="date" type="text" value="{{ $model->date->format('d-m-Y') }}">
                        <div class="text-danger">{{ $errors->first('date') }}</div>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-white">
                <a href="{{ route('income.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection