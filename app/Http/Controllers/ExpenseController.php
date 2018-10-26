<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // All Result
//         $model = Expense::all();

        // Pagination
        $model = Expense::paginate(5);

        return view('expense.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:"d-m-Y"'
        ]);

        $model = new Expense();
        $model->name = $request->input('name');
        $model->category_id = $request->input('category_id');
        $model->amount = $request->input('amount');

        $date = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('date'));
        $model->date = $date;

        $model->save();

        return redirect()->route('expense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Expense::find($id);
        return view('expense.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:"d-m-Y"'
        ]);

        $model = Expense::find($id);
        $model->name = $request->input('name');
        $model->category_id = $request->input('category_id');
        $model->amount = $request->input('amount');

        $date = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('date'));
        $model->date = $date;

        $model->save();

        return redirect()->route('expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Expense::find($id);
        $model->delete();

        return redirect()->route('expense.index');
    }
}
