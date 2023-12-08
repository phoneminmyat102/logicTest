<?php

function calMiniLoss($num){
    for ($i=0; $i < $num; $i++) { 
        $tmpPrices[] = rand(1, 20);
    }

    echo "Price : ". implode(',', $tmpPrices)."\n";
    $total_count = count($tmpPrices);
    $losses = [];
    foreach ($tmpPrices as $key => $each) {
        $basePrice = $each;
        for ($i= $key+1; $i < $total_count; $i++) { 
            if($tmpPrices[$i] < $basePrice){
                $losses[] = $basePrice - $tmpPrices[$i];
            }
        }
    }
    return "Minimum Loss : ".min($losses);
}

echo(calMiniLoss(4));