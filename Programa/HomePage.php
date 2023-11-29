<?php  include('head.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style type="text/css">
    
    section{
    display: flex;
    width: 500px;
    height: 250px;
    margin: 20px auto;


  }
  section img{
    width: 0px;
    flex-grow: 1;
    object-fit: cover;
    opacity: .8;
    transition: .5s ease;
    
  

  }
  section img:hover{
    cursor: crosshair;
    width: 150px;
    opacity: 1;
    filter: contrast(120%);
   

  }
 
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #448f61;
    color: #fff;
    padding: 20px;
    text-align: center;
}



main {
    padding: 20px;
}

section {
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
    text-align: center;
    
}

footer {
    text-align: center;
    background-color: #448f61;
    color: #fff;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>


</head>
<body>
<header>
    <h1 class="titulo"> Proyecto integrador </h1> 
</header>
<main>

<section>
          <img src="Itst\Biblioteca.jpg" alt="Datos recolectados de la biblioteca del ITST" width="500" height="200">
          <img src="Itst\ORG.webp" alt="Administración y organización de datos" width="500" height="200">
          <img src="Itst\Logotectez.jpg" alt="ITST" width="500" height="200">
          <img src="Itst\Estadistica.jpg" alt="Estadística y probabilidad" width="500" height="200">
          <img src="Itst\INFORMÁTICA1.png" alt="Estadística y probabilidad" width="500" height="200">

</section>

    
        <h2>Objetivo</h2>
        <p>Desarrollar un sitio web que nos permita analizar y contabilizar diferentes tipos de datos, con el propósito de proporcionar información con respecto 
         a la cantidad de personas que ingresan a la biblioteca, clasificada por hombres, mujeres, alumnos, docentes y personal del ITST.
         y proporcionar a los administradores y personas interesadas 
         herramientas eficientes para comprender y gestionar el flujo de visitantes. </p>
   
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> ITST</p>
</footer>
</body>
</html>
<?php  include('footer.php')?>