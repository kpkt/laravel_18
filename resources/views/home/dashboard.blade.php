@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <div class="d-flex border">
                <div class="bg-success text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-hand-holding-usd"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Incomes</p>
                    <h3 class="font-weight-bold mb-0">RM {{ number_format($income->total, 2) }}</h3>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex border">
                <div class="bg-warning text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Expenses</p>
                    <h3 class="font-weight-bold mb-0">RM {{ number_format($expense->total, 2) }}</h3>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="d-flex border">
                <div class="bg-info text-light p-4">
                    <div class="d-flex align-items-center h-100">
                        <i class="fa fa-3x fa-fw fa-piggy-bank"></i>
                    </div>
                </div>
                <div class="flex-grow-1 bg-white p-4">
                    <p class="text-uppercase text-secondary mb-0">Total Balance</p>
                    <h3 class="font-weight-bold mb-0">RM {{ number_format($balance, 2) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-white font-weight-bold">Income by Category</div>
                <div class="card-body">
                    <div id="chart_income"></div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header bg-white font-weight-bold">Expense by Category</div>
                <div class="card-body">
                    <div id="chart_expense"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom-script')
    <script>
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChartIncome);
        google.charts.setOnLoadCallback(drawChartExpense);

        function drawChartIncome() {
            var jsonData = $.ajax({
                url: "{{ route('home.data-incomes') }}",
                dataType: "json",
                async: false
            }).responseText;
            var data = new google.visualization.DataTable(jsonData);

            var formatter = new google.visualization.NumberFormat({
                prefix: 'RM'
            });
            formatter.format(data, 1);

            var chart = new google.visualization.PieChart(document.getElementById('chart_income'));
            var options = {
                pieSliceText: 'value',
                pieSliceTextStyle: {color: 'black'},
                pieHole: 0.4, height: 400,
                legend: {position: 'bottom'}
            };
            chart.draw(data, options);
        }

        function drawChartExpense() {
            var jsonData = $.ajax({
                url: "{{ route('home.data-expenses') }}",
                dataType: "json",
                async: false
            }).responseText;
            var data = new google.visualization.DataTable(jsonData);

            var formatter = new google.visualization.NumberFormat({
                prefix: 'RM'
            });
            formatter.format(data, 1);

            var chart = new google.visualization.PieChart(document.getElementById('chart_expense'));
            var options = {
                pieSliceText: 'value',
                pieSliceTextStyle: {color: 'black'},
                pieHole: 0.4, height: 400,
                legend: {position: 'bottom'}
            };
            chart.draw(data, options);
        }

    </script>
@endsection