<?php 

function validate_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

echo validate_email("nfon@ma.com") ? "True" : "False";