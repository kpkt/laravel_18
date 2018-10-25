<?php

namespace App\Http\Controllers;

use App\Income;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Income::all();
        return view('income.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Income();
        $model->name = $request->input('name');
        $model->category_id = $request->input('category_id');
        $model->amount = $request->input('amount');

        $date = Carbon::createFromFormat('d-m-Y', $request->input('date'));
        $model->date = $date;

        $model->save();

        return redirect()->route('income.index');
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
        $model = Income::find($id);
        return view('income.edit', compact('model'));
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
        $model = Income::find($id);
        $model->name = $request->input('name');
        $model->category_id = $request->input('category_id');
        $model->amount = $request->input('amount');

        $date = Carbon::createFromFormat('d-m-Y', $request->input('date'));
        $model->date = $date;

        $model->save();

        return redirect()->route('income.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Income::find($id);
        $model->delete();

        return redirect()->route('income.index');
    }
}
