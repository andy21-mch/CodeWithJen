<?php 

function countWords($sentence){
    $array = explode(' ',$sentence);
    return count($array);
}