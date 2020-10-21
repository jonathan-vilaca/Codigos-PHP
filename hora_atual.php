<?php

$data = date('H:i:s');

if(($data >= "6:00") && ($data <="11:59"))
    {
    echo "Bom Dia!";
}

if(($data >= "12:00") && ($data <="17:59"))
    {
    echo "Boa Tarde!";
}
    
if(($data >= "18:00") && ($data <="5:59"))
    {
    echo "Boa Noite!";
}
?>
