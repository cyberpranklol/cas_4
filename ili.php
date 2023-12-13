<?php

    $ime = "Stefan";

    if($ime == "Stefan")
    {
        echo "Dobrodosao";
    }

    else if ($ime == "Petar")
    {
        echo "Dobrodosao";
    }

    else
    {
        echo "Niste Toma ili Petar";
    }

    if($ime == "Stefan" || $ime == "Petar")
    {
        echo "Dobrodosli";
    }

    else
    {
        echo "Niste Toma ili Petar";
    }