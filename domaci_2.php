<?php
 
    $vreme = date("21");
 
    if($vreme >=5 && $vreme <=12){
        echo "Jutro";
    }
    else if($vreme >=12 && $vreme <=20){
        echo "Podne";
    }
    else{
        echo "Noc";
    }

    ?>
    
