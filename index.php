<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Hoja de vida PHP</title>
</head>
<body>
    <?php
        $nombre = "Cristian Jurado";
        $profesion = "Ingeniero de Sistemas";
        $edad = 21;
        $habilidades = [
    "HTML",
    "Java",
    "Lenguaje C",
    "Desarrollo de páginas web",
    "Trabajo en equipo",
    "Resolución de problemas"
        ];
    ?>

    <h1><?php echo $nombre; ?></h1>
    <h2><?php echo $profesion; ?></h2>
     <p><?php echo " soy " . $nombre . " y soy " . $profesion ?></p>

     <?php if($edad >= 18):{ ?>
    <p>Disponible para trabajar</p>
<?php } else:{ ?>
    <p>Menor de edad - no puede trabajar</p>
<?php } endif; ?>

</body>
</html>
    <h1><?php echo $nombre ?></h1>
</body>
</html>