<script src="/github/bluehouse/Vue/Chart.js"></script>
<canvas id=<?php echo $n_sensor; ?> width="400" height="400"></canvas>
<script>
var jdates=<?php echo json_encode($datesI); ?>;
var jdonnees=<?php echo json_encode($donneesI);?>;
var jtype =<?php echo json_encode($type);?>;
var id = <?php echo $n_sensor; ?>;
var ctx = document.getElementById(id);
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: jdates,
        datasets: [{
            label: jtype,
            data: jdonnees,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
			responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
