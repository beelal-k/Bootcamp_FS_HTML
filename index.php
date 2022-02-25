<?php

//this loop controls the amount of rows the 'j' loop repeats for

for ($i=1; $i<=10; $i++){   

    // now this loop, it controls the amount of times the * repeats in the row, 
    //so as long as 'j' is <= 'i', it will keep running

    for( $j=1; $j<=$i; $j++){  

        echo "*\n";
    }

    echo "<br>";

}




?>
