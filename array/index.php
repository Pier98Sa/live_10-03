<?php
    
    $listaDiParola = ['pane', 'latte','uova',];

    if(!empty($_GET['parola'])){
        $parola = $_GET['parola'];

        if (in_array($parola, $listaDiParola)){
            echo 'la parola è presente';
        }else{
            echo 'la parola non è presente';
        }
    }else{
        echo "parola da ricercare non inserita";
    }
   
?>