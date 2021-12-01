<?php
    function Capital ($ville){
        $ville=readLine("donner une ville\n");
        switch ($ville){
            case "dakar": $ville="dakar";
                $pays="senegal";
                echo $pays."==>".$ville;
                break;
            case "paris": $ville="paris";
            $pays="france";
            echo $pays."==>".$ville;
            break;   
            case "Berlin": $ville="Berlin";
            $pays="Allemagne";
            echo $pays."==>".$ville;
            break;   
            case "Bamako": $ville="Bamako";
            $pays="Mali";
            echo $pays."==>".$ville;
            break;   
            case "Madrid": $ville="Madrid";
            $pays="Espagne";
            echo $pays."==>".$ville;
            break;  
            default:echo("ville inexistante");
            break;
            
        }
    }
    echo Capital($ville);
