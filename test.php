<?php


$fieldValue = "";


$fieldValue1 = "hola";



if($fieldValue == "")
echo "<br>Field empty";


if($fieldValue1 == "")
echo "<br>Field1 empty";


if(checkEmptyValue($fieldValue))
echo "<br>Field empty";


if(checkEmptyValue($fieldValue))
echo "<br>Field empty";

function checkEmptyValue($fieldValue) {
    if ($fieldValue == "")
    return true;
    else
        return false;
}


?>