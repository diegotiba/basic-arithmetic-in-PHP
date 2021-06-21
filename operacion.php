<html>

<head>
  <title>Problema</title>
</head>

<body>
 
  <form action="operacion.php" method="post"> 
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <input type="radio" name="radio1" value="suma">Sumar
    <br>
    <input type="radio" name="radio1" value="resta">Restar
    <br>
    <input type="submit" name="operar">
  </form>

  <?php
  if ($_REQUEST['radio1'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
  } else {
    if ($_REQUEST['radio1'] == "resta") {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:" . $resta;
    }
  }
  ?>




</body>

</html>