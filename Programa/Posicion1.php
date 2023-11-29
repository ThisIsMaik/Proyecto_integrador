<?php include('head.php');?>
<script src="code/highcharts.js"></script>
<script src="code/highcharts-3d.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>

<?php
    $datos = array(
        array(
            "etiqueta"=> "Primer decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "segundo decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Tercer decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Cuarto decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Quinto decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Sexto decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Séptimo decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Octavo decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Noveno decil",
            "cantidad" => 10


        ),
        array(
            "etiqueta"=> "Décimo decil",
            "cantidad" => 10


        ),

    )
?>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
    <center>
    
    <h1>Primer decil</h1>
    </center>

    </p>
</figure>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Deciles',
        align: 'left'
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="https://www.counterpointresearch.com/global-smartphone-share/"' +
            'target="_blank">Counterpoint Research</a>',
        align: 'left'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Share',
        data: [
            <?php
           
           
           
            foreach($datos as $dato){
        echo'['."'".$dato['etiqueta']."'".','.$dato['cantidad'].'],';
    }


        ?>
           
        ]
    }]
});

		</script>

<div class="container">
<h3>Interpretación:</h3>
        <p>En el total del dato de los alumnos se ubico el decil numero 1, que es igual a: 1</p>


	</body>
</html>
<?php  include('footer.php')?>