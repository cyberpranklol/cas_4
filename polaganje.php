<?php

    $godine = 22;
    $kazne = false;
    

    if($godine >= 18 && $kazne == false)
    {
        echo "Mozete polagati za automobil";
    }
    else
    {
        echo "Niste ispunuli uslove";
    }