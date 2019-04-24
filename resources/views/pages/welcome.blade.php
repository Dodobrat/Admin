@extends('layouts.app')
@section('content')


    <canvas id="myChart" width="400" height="400"></canvas>

@endsection

@section('js')
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First Dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: "rgb(75, 192, 192)",
                    lineTension: 0.3
                }]
            },
            options: {}
        });
    </script>
@append
