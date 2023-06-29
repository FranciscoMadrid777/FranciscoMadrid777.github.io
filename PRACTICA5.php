<?php

    $cuadro = $_POST["cuadro"];

    for($i=0; $i<count($cuadro); $i++){
        if($cuadro[$i] != "X" && $cuadro[$i] != "O"){
            echo "<h2> Solo se permiten X y/o O </h2>";
            return;
        }
    }
/*
    [0][1][2]
    [3][4][5]
    [6][7][8]
*/

    if($cuadro[0] == "X" && $cuadro[1] == "X" && $cuadro[2] == "X"){
        echo "<h1> Ganador X </h1>";
        echo "[0][1][2]<br>
              [ ][ ][ ]<br>
              [ ][ ][ ]";
        return;
    } else if($cuadro[0] == "O" && $cuadro[1] == "O" && $cuadro[2] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[0][1][2]<br>
              [ ][ ][ ]<br>
              [ ][ ][ ]";
        return;
    }

    if($cuadro[3] == "X" && $cuadro[4] == "X" && $cuadro[5] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[ ][ ][ ]<br>
              [3][4][5]<br>
              [ ][ ][ ]";
        return;
    } else if($cuadro[3] == "O" && $cuadro[4] == "O" && $cuadro[5] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[ ][ ][ ]<br>
              [3][4][5]<br>
              [ ][ ][ ]";
        return;
    }

    if($cuadro[6] == "X" && $cuadro[7] == "X" && $cuadro[8] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[ ][ ][ ]<br>
              [ ][ ][ ]<br>
              [6][7][8]";
        return;
    } else if($cuadro[6] == "O" && $cuadro[7] == "O" && $cuadro[8] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[ ][ ][ ]<br>
              [][ ][ ]<br>
              [6][7][8]";
        return;
    }
    
    

    if($cuadro[0] == "X" && $cuadro[3] == "X" && $cuadro[6] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[0][ ][ ]<br>
              [3][ ][ ]<br>
              [6][ ][ ]";
        return;
    } else if($cuadro[0] == "O" && $cuadro[3] == "O" && $cuadro[6] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[0][ ][ ]<br>
              [3][ ][ ]<br>
              [6][ [ ]";
        return;
    }

    if($cuadro[1] == "X" && $cuadro[4] == "X" && $cuadro[7] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[ ][1][ ]<br>
              [ ][4][ ]<br>
              [ ][7][ ]";
        return;
    } else if($cuadro[1] == "O" && $cuadro[4] == "O" && $cuadro[7] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[ ][1][ ]<br>
              [ ][4][ ]<br>
              [ ][7][ ]";
        return;
    }

    if($cuadro[2] == "X" && $cuadro[5] == "X" && $cuadro[8] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[ ][ ][2]<br>
              [ ][ ][5]<br>
              [ ][ ][8]";
        return;
    } else if($cuadro[2] == "O" && $cuadro[5] == "O" && $cuadro[8] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[ ][ ][2]<br>
              [ ][ ][5]<br>
              [ ][ ][8]";
        return;
    }



    if($cuadro[0] == "X" && $cuadro[4] == "X" && $cuadro[8] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[0][ ][ ]<br>
              [ ][4][ ]<br>
              [ ][ ][8]";
        return;
    } else if($cuadro[0] == "O" && $cuadro[4] == "O" && $cuadro[8] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[0][ ][ ]<br>
              [ ][4][ ]<br>
              [ ][ ][8]";
        return;
    }

    if($cuadro[2] == "X" && $cuadro[4] == "X" && $cuadro[6] == "X"){
        echo "<h1> Ganador X </h1>";
                echo "[ ][ ][2]<br>
              [ ][4][ ]<br>
              [6][ ][ ]";
        return;
    } else if($cuadro[2] == "O" && $cuadro[4] == "O" && $cuadro[6] == "O"){
        echo "<h1> Ganador O </h1>";
                echo "[ ][ ][2]<br>
              [ ][4][ ]<br>
              [6][ ][ ]";
        return;
    }

?>
