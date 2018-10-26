@extends('layouts.admin')

@section('title', 'Expense List')

@section('content')
    <div class="row mb-2">
        <div class="col text-right">
            <a href="{{ route('expense.create') }}" class="btn btn-success">New Expense</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach($model as $expense)
            <tr>
                <!-- perPage() * currentPage-1 -->
{{--                <td>{{ $loop->iteration }}</td>--}}
                <td>{{ ($model->perPage() * ($model->currentPage()-1)) + $loop->iteration }}</td>
                <td>{{ $expense->name }}</td>
                <td>{{ $expense->category->name }}</td>
                <td>{{ $expense->amount }}</td>
                <td>{{ $expense->date->format('d-m-Y') }}</td>
                <td>
                    <form action="{{ route('expense.destroy', $expense->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $model->links() }}
@endsection