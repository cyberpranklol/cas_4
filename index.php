<?php

    $ime = "Stefan";
    $godine = 27;
    $visina = 181;

    //conditional statement - if
    if($ime == "Stefan") 
    {
        echo "Pozdrav Stefane!";
    }

    if($godine == 18)
    {
        echo "Imate 18 godina";
    }
    else if($godine == 27)
    {
        echo "Imate 27 godina";
    }

    if($visina < 170)
    {
        echo "niski ste";
    }
    else
    {
        echo "visoki ste";
    }


    $godinaRodjenja = 1996;
    

    if($godinaRodjenja == 1992)
    {
        echo "imate 31 godinu";
    }
    else if($godinaRodjenja == 1999)
    {
        echo "imate 24 godine";
    }
    else
    {
        $tgodine = date("Y") - $godinaRodjenja;
        echo "Trenutno imam $tgodine";
    }