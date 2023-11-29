<?php  include('head.php')?>
<?php

$csvFile = 'DatosHombres.csv';
$csvData = file_get_contents($csvFile);
$rows = str_getcsv($csvData, "\n");
$data = array();

foreach ($rows as $row){
$data[] = str_getcsv($row,",");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
<table class="table table-primary table-striped">
    <thead>
        <th>Día</th>
        <th>No.Hombre</th>
        <th>Alumnos</th>
        <th>Docentes</th>   
        <th>Personal</th>  
       
    </thead>
    <tbody>  
    <?php
    $x = count($data[0]);
     for($i=0;$i<10;$i++): ?>
    <tr>
        <td><?php echo $data[$i][0]?></td>
        <td><?php echo $data[$i][1]?></td>
        <td><?php echo $data[$i][2]?></td>
        <td><?php echo $data[$i][3]?></td>
        <td><?php echo $data[$i][4]?></td>
      
    </tr>

<?php endfor?>


</tbody>
</table>
     </div>

     <div class="container">
        <h3>En esta tabla se muestran los datos recabados en los diez días sobre los hombres que ingresaron</h3>
        <?php

$texto = "El total de hombres que ingresaron en los 10 días es: 28 en total.
El número de los alumnos es: de 19 hombres.
El número de docentes es: de 9 hombres en total
En el personal no se observó a ningún hombre trabajando o apoyando en la biblioteca (o al menos en las horas de las que se sacaron los datos)";


$lineas = explode("\n", $texto);


echo "<ul>";
foreach ($lineas as $linea) {
    echo "<li>$linea</li>";
}
echo "</ul>";

?>

</body>
</html>
<?php  include('footer.php')?>