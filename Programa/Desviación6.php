<?php  include('head.php')?>
<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Desviación Estándar con Highcharts y PHP</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>

<div id="container" style="width: 1350px; height: 500px;"></div>

<?php

$datos = [3,5,6,0,3]; 
$desviacion_estandar = sqrt(array_sum(array_map(function($x) use ($datos) {
    return pow($x - array_sum($datos) / count($datos), 2);
}, $datos)) / (count($datos) - 1)); 

?>

<script type="text/javascript">
    var datos = <?php echo json_encode($datos); ?>;
    var desviacion_estandar = <?php echo $desviacion_estandar; ?>;

    Highcharts.chart('container', {
        title: {
            text: 'Desviación Estándar Lunes 13 de Noviembre del 2023'
        },
        xAxis: {
            title: {
                text: 'Puntos'
            }
        },
        yAxis: {
            title: {
                text: 'Valor'
            }
        },
        series: [{
            name: 'Datos',
            data: datos
        }, {
            name: 'Desviación Estándar',
            type: 'scatter',
            data: [[datos.length - 1, desviacion_estandar]],
            marker: {
                symbol: 'circle',
                radius: 6,
                fillColor: 'red'
            },
            tooltip: {
                pointFormat: 'Desviación Estándar: {point.y}'
            }
        }]
    });
</script>

<div class="container">
        <h2>¿Qué es la desviación estándar?</h2>
        <p>La desviación estándar se utiliza comúnmente para entender la dispersión de un conjunto de 
            datos y proporciona una medida de cuán cerca o lejos están los valores individuales de la 
            media. Una desviación estándar grande indica que los valores del conjunto de datos están más
             dispersos alrededor de la media, mientras que una desviación estándar pequeña indica que los 
             valores tienden a estar más cerca de la media.</p>

</body>
</html>
<?php  include('footer.php')?>