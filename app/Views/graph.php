<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<body>
    <canvas id="myChart"></canvas>

    <script>
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green", "blue", "orange", "brown"];
       
        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
        });
            //   options: {
            //     legend: {display: false},
            //     scales: {
            //       xAxes: [{ticks: {min: 40, max:160}}],
            //       yAxes: [{ticks: {min: 6, max:16}}],
            //     }
            //   }
       
    </script>

</body>

</html>