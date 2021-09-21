<?php
function lay_du_lieu()
{
    $lay = file_get_contents("Employee.json");
    return json_decode($lay, true);
}

function gui_du_lieu($arr)
{
    $gui = json_encode($arr, JSON_PRETTY_PRINT);
    file_put_contents("Employee.json",$gui);
}