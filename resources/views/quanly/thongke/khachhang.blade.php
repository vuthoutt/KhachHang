@extends('quanly.layout.layout')
@section('head')
    <title>Thống Kê</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Thống kê</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    var month = <?php echo $month; ?>;
    var user_vip = <?php echo $user_vip; ?>;
    var user = <?php echo $user; ?>;
    var barChartData = {
        labels: month,
        datasets: [{
            label: 'User',
            backgroundColor: "pink",
            data: user
        },
        {
            label: 'User VIP',
            backgroundColor: "green",
            data: user_vip
        },
        ]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Khách Hàng Tham Gia(theo tháng)'
                }
            }
        });
    };
</script>
@endsection
