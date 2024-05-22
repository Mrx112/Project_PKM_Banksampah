<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grafik Nasabah</title>
    <script src="../asset/plugin/chart/js/highcharts.js"></script>
    <script src="../asset/plugin/chart/js/exporting.js"></script>
</head>
<body>
    <h2 style="font-size: 30px; color: #262626;">Grafik Nasabah</h2>
    <div id="container"></div>

    <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Data Pemasukan dan Pengeluaran Nasabah'
            },
            subtitle: {
                text: 'Source: Bank Sampah Resik Kutha Kota Surakarta'
            },
            xAxis: {
                categories: [
                    <?php 
                    $query = mysqli_query($conn, "SELECT DISTINCT DATE_FORMAT(tanggal_setor, '%Y-%m') AS bulan FROM setor 
                    UNION 
                    SELECT DISTINCT DATE_FORMAT(tanggal_tarik, '%Y-%m') AS bulan FROM tarik ORDER BY bulan");
                    while ($row = mysqli_fetch_array($query)) {
                        echo "'" . $row['bulan'] . "',";
                    } 
                    ?>
                ],
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'Jumlah (Rupiah)'
                },
                labels: {
                    formatter: function () {
                        return this.value;
                    }
                }
            },
            tooltip: {
                split: true,
                valueSuffix: ' Rupiah'
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
            series: [
                {
                    name: 'Pemasukan',
                    data: [
                        <?php 
                        $query = mysqli_query($conn, "SELECT DATE_FORMAT(tanggal_setor, '%Y-%m') AS bulan, SUM(total) AS total FROM setor GROUP BY bulan ORDER BY bulan");
                        while ($row = mysqli_fetch_array($query)) {
                            echo $row['total'] . ",";
                        } 
                        ?>
                    ]
                },
                {
                    name: 'Pengeluaran',
                    data: [
                        <?php 
                        $query = mysqli_query($conn, "SELECT DATE_FORMAT(tanggal_tarik, '%Y-%m') AS bulan, SUM(jumlah_tarik) AS total FROM tarik GROUP BY bulan ORDER BY bulan");
                        while ($row = mysqli_fetch_array($query)) {
                            echo $row['total'] . ",";
                        } 
                        ?>
                    ]
                }
            ]
        });
    </script>
</body>
</html>
