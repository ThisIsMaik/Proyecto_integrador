<?php  include('head.php')?>
<?php

$csvFile = 'DatosMujeres.csv';
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

<table class="table table-success table-striped table-danger">
    <thead>
        <th>Día</th>
        <th>Total de mujeres</th>
        <th>Alumnas</th>
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
        <h3>En esta tabla se muestran los datos recabados en los diez días sobre las mujeres que ingresaron</h3>
        <?php

$texto = "El total de mujeres que ingresaron en los 10 días es: 52 en total.
El número de los alumnos es: de 16 mujeres.
El número de docentes es: de 13 mujeres en total
En el personal se observaron a 24 mujeres trabajando o apoyando en la biblioteca.";


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