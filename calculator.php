<?php

    echo ("welke operatie wil je uitvoeren? (+, -)");
    $operatie = readline($prompt);
    if ($operatie == "+"){
        echo ("eerste getal?");
        $eerste = readline($prompt);
        echo ("tweede getal?");
        $tweede = readline($prompt);
        echo ($eerste + $tweede);
    } else {
        echo ("eerste getal?");
        $eerste = readline($prompt);
        echo ("tweede getal?");
        $tweede = readline($prompt);
        echo ($eerste - $tweede);
    }

?>