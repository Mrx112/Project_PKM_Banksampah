
<h2 style="font-size: 30px; color: #262626;">Grafik Data Nasabah</h2>

<div id="container"></div>

<script src="../asset/plugin/chart/js/highcharts.js"></script>
<script src="../asset/plugin/chart/js/exporting.js"></script>
<script type="text/javascript">
	Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Data Jumlah Nasabah'
    },
    subtitle: {
        text: 'Source: Bank Sampah Resik Kutha Kota Surakarta'
    },
    xAxis: {
        categories: [<?php $query = mysqli_query($conn, "SELECT * FROM nasabah group by rt"); while($row = mysqli_fetch_array($query)){echo $row['rt'].","; } ?>],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Jumlah per jiwa'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' Jiwa'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [ {
        name: 'Nasabah Kota Surakarta',
        data: [<?php $query = mysqli_query($conn, "SELECT COUNT(nin) AS jiwa FROM nasabah group by rt"); while($row = mysqli_fetch_array($query)){echo ($row['jiwa']).","; } ?>]
    }]
});
</script>