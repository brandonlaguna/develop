<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton|Merienda" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="/ibrinezcoaching/dependences/parallaxV1.5.0/basicparallax.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php
foreach(glob("dependences/materializeV1.0.0/*.css") as $style){
    echo "<link rel='stylesheet' type='text/css' href='/ibrinezcoaching/".$style."'> ";
}

foreach(glob("dependences/animatecssV1.0.0/*.css") as $style){
    echo "<link rel='stylesheet' type='text/css' href='/ibrinezcoaching/".$style."'> ";
}
foreach(glob("dependences/animatecssV1.0.0/*.js") as $animate){
    echo "<script src='/ibrinezcoaching/".$animate."'> </script>";
}
foreach(glob("dependences/mainappV0.0.1/*.css") as $css){
    echo "<link rel='stylesheet' type='text/css' href='/ibrinezcoaching/".$css."'> ";
}
foreach(glob("dependences/materializeV1.0.0/*.js") as $script){
    echo "<script src='/ibrinezcoaching/".$script."'> </script>";
}
foreach(glob("dependences/parollerV1.2.9/*.js") as $parollex){
    echo "<script src='/ibrinezcoaching/".$parollex."'></script>";
}
?>
<script src="/ibrinezcoaching/dependences/scripts/script.js"></script>
</head>