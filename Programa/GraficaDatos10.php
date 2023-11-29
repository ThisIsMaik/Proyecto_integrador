<?php  include('head.php')?>

<?php

$csvFile = 'DatosProyecto.csv';
$csvData = file_get_contents($csvFile);
$rows = str_getcsv($csvData, "\n");
$data = array();

foreach($rows as $row){
    $data[] = str_getcsv($row, ", ");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
    #container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 1200px;
    max-width: 1000px;
    margin: 1em auto;
}

#datatable {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

#datatable caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

#datatable th {
    font-weight: 600;
    padding: 0.5em;
}

#datatable td,
#datatable th,
#datatable caption {
    padding: 0.5em;
}

#datatable thead tr,
#datatable tr:nth-child(even) {
    background: #f8f8f8;
}

#datatable tr:hover {
    background: #f1f7ff;
}

    </style>
</head>

<body>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/data.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
<div id="container"></div>
    
    <table class="table" id="messi">
    <thead>

<th>Fecha</th>
<th>Hombres</th>
<th>Mujeres</th>
<th>Alumnos</th>
<th>Docentes</th>
<th>Personal</th>
<th>Total de personas que ingresaron a la biblioteca</th>

</thead>
<tbody>
<?php 
$x = count($data[0]);
for($i=9; $i<10; $i++): ?>
 <?php $Total = ($data[$i][1] + $data[$i][2]); ?>
<tr>
    <td><?php echo $data[$i][0]?></td>
    <td><?php echo $data[$i][1]?></td>
    <td><?php echo $data[$i][2]?></td>
    <td><?php echo $data[$i][3]?></td>
    <td><?php echo $data[$i][4]?></td>
    <td><?php echo $data[$i][5]?></td>
    <td><?php echo $Total?></td>


</tr>
<?php endfor ?>

        </tbody>
        </figure>
    </table>
    <script type="text/javascript">
    Highcharts.chart('container', {
    data: {
        table: 'messi'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Personas que ingresaron a la biblioteca el viernes 17 de Noviembre del 2023'
    },
    subtitle: {
        text:
            'Datos recolectados por Equipo Maik'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    }
});

</script>
<?php  include('footer.php')?>

