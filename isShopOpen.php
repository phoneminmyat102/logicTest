<?php

function isShopOpen($day_of_week, $current_time){
    $shopData = [
        "Monday" => ["7:30", "20:30"],
        "Tuesday" => ["7:30", "20:30"],
        "Wednesday" => ["7:30", "20:30"],
        "Thursday" => ["7:30", "20:30"],
        "Friday" => ["7:30", "22:00"],
        "Saturday" => ["9:00", "22:00"],
        "Sunday" => ["9:00", "20:30"]
    ];

    if(strtotime($current_time) > strtotime($shopData[$day_of_week][0]) 
    && strtotime($current_time) < strtotime($shopData[$day_of_week][1])
    ){
        return "Open Now\n";
    }else{
        return "Close Now\n";
    }
}

echo(isShopOpen("Monday", "6:40"));
echo(isShopOpen("Sunday", "20:10"));
echo(isShopOpen("Friday", "22:45"));
