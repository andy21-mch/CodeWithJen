<?php 

function removeDuplicate($array){
    return array_unique($array);
}

$uniuqe = removeDuplicate([1,2,4,5,5,3,5]);
sort($uniuqe);

print_r($uniuqe);