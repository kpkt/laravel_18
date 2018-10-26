@extends('layouts.admin')

@section('title', 'Add Income')

@section('content')
    <form action="{{ route('income.store') }}" method="POST">
        @csrf

        <div class="card">
            <div class="card-header bg-white font-weight-bold">Add Income</div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option>-- Select Category --</option>
                            @foreach(\App\Category::all() as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Name" name="name" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Amount" name="amount" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input class="form-control" placeholder="Date: DD-MM-YYYY" name="date" type="text">
                    </div>
                </div>

            </div>
            <div class="card-footer bg-white">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection