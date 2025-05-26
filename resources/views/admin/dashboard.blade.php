@extends('layouts.admin')

@section('title')
    Admin Dashboard
@section('content')
    <h1>Admin Dashboard</h1>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Game', 'Orders'],
          @foreach($gameOrders as $order)
            ['{{ $order->title }}', {{ $order->orders_count }}]@if(!$loop->last),@endif
          @endforeach
        ]);

        var options = {
          title: 'Narucene igre'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>
@endsection