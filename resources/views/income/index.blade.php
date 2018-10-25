@extends('layouts.admin')

@section('title', 'Income List')

@section('content')
    <div class="row mb-2">
        <div class="col text-right">
            <a href="{{ route('income.create') }}" class="btn btn-success">New Income</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach($model as $income)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $income->name }}</td>
                <td>{{ $income->amount }}</td>
                <td>{{ $income->date->format('d-m-Y') }}</td>
                <td>
                    <form action="{{ route('income.destroy', $income->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('income.edit', $income->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection