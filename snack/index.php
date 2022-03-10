<?php

   // ciclo while che crea un array con 15 numeri creati randomicamente tra 1 e 100
    $array= [];
    $min = 1;
    $max = 100;
    $lenghtArray = 15;

    if($lenghtArray <= $max - $min +1){
        
        while(count($array)< $lenghtArray){
        
            $num = rand($min, $max);
    
            if(!in_array($num,$array)){
                $array[] = $num;
            }    
        }
    
        var_dump($array);
    }else{
        echo 'valori non corretti';
    }

   
?>