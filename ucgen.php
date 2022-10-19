<?php

function ucgen($sayi){
    for($i=0;$i<$sayi;$i++){

        $yazdir = 0;
        while($yazdir < $i){

            echo "O"." ";
            $yazdir++;

        }
        echo "<br>";
    }
}

ucgen(15);