<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Income;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.blank');
    }

    public function dashboard()
    {
        $income = Income::selectRaw('SUM(amount) AS total')->first();
        $expense = Expense::selectRaw('SUM(amount) AS total')->first();
        $balance = $income->total - $expense->total;
        return view('home.dashboard', compact('income', 'expense', 'balance'));
    }

    public function getIncomeData()
    {
        $results = Income::selectRaw('categories.name, SUM(amount) AS total')
            ->join('categories', 'categories.id', '=', 'incomes.category_id')
            ->groupBy('categories.name')
            ->get();

        $json['cols'] = [
            ['label' => 'Category', 'type' => 'string'],
            ['label' => 'Total Amount', 'type' => 'number']
        ];
        foreach ($results as $result){
            $json['rows'][]['c'] = [
                ['v' => $result->name],
                ['v' => $result->total],
            ];
        }

        return response()->json($json);
    }

    public function getExpenseData()
    {
        $results = Expense::selectRaw('categories.name, SUM(amount) AS total')
            ->join('categories', 'categories.id', '=', 'expenses.category_id')
            ->groupBy('categories.name')
            ->get();

        $json['cols'] = [
            ['label' => 'Category', 'type' => 'string'],
            ['label' => 'Total Amount', 'type' => 'number']
        ];
        foreach ($results as $result){
            $json['rows'][]['c'] = [
                ['v' => $result->name],
                ['v' => $result->total],
            ];
        }

        return response()->json($json);
    }
}
