<?php

    $Nombre = $_POST["nombre"];
    $Calificacion = 0;

    $Pregunta1 = $_POST["pregunta1"];
    $Pregunta2 = $_POST["pregunta2"];
    $Pregunta3 = $_POST["pregunta3"];
    $Pregunta4 = $_POST["pregunta4"];
    $Pregunta5 = $_POST["pregunta5"];
    $Pregunta6 = $_POST["pregunta6"];
    $Pregunta7 = $_POST["pregunta7"];
    $Pregunta8 = $_POST["pregunta8"];
    $Pregunta9 = $_POST["pregunta8"];
    $Pregunta10 = $_POST["pregunta10"];


    echo "Nombre de Alumno:" . $Nombre . "<br><br>";

    if($Pregunta1 == "c"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: C". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta2 == "b"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: B". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta3 == "c"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: C". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta4 == "d"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: D". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta5 == "c"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: C". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta6 == "c"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: C". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta7 == "c"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: C". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta8 == "b"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: B". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta9 == "b"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: B". "<br><br>";
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }
    if($Pregunta10 == "d"){
        $Calificacion ++;
        echo "Correcto". "<br><br>";
        echo "<img src= 'correcta.png'>". "<br><br>";
    }else{
        echo "Incorrecto, respuesta correcta: D". "<br><br>" ;
        echo "<img src= 'incorrecta.png'>". "<br><br>";
    }

    echo "Tu Calificación es:" . $Calificacion . "<br><br>";

    if($Calificacion > 5){
        echo "Aprobaste". "<br><br>";
        echo "<img src= 'feliz.png'>". "<br><br>";
    }else{
        echo "Reprobaste". "<br><br>";
        echo "<img src= 'triste.jpg'>". "<br><br>";
    }
?>
