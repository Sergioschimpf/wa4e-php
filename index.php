<!DOCTYPE html>
<html>
<head>
  <title>Sergio Schimpf 67e203a2</title>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Bienvenido al curso WA4E</h1>
  <p>Este archivo combina <strong>HTML</strong> y <strong>PHP</strong> en un solo script.</p>
  <?php
    echo "<p>Hola desde PHP</p>";
    $nombre = "Sergio Schimpf";
    $curso = "Building Web Applications in PHP";
    $anio = date("Y");
    echo "<p>Estudiante: $nombre<br>";
    echo "Curso: $curso<br>";
    echo "Año: $anio</p>";
    echo "<h3>Ejemplo con etiqueta &lt;pre&gt;:</h3>";
    echo "<pre>";
    print_r(array('HTML', 'PHP', 'MySQL', 'JavaScript'));
    echo "</pre>";
  ?>
  <p>Fin del ejemplo.</p>
</body>
</html>
