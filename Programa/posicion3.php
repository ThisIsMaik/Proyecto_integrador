<?php include('head.php');?>
<script src="code/highcharts.js"></script>
<script src="code/highcharts-3d.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>

<?php
    $datos = array(
        array(
            "etiqueta"=> "Segundo cuartil",
            "cantidad" => 50


        ),
        array(
            "etiqueta"=> "Tercer cuartil",
            "cantidad" => 25


        ),
        array(
            "etiqueta"=> "Cuarto cuartil",
            "cantidad" => 25


        )


    )
?>
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        
    <center>
    
    <h1>Segundo cuartil</h1>
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
        text: 'Cuartiles',
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
        <p>En el total del dato de los alumnos se ubicó el cuartil número 2, que es igual a: 2</p>


	</body>
</html>
<?php  include('footer.php')?>