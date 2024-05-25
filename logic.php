<?php
if($_POST['id'] == 'ramesh'){
    if($_POST['password'] == 'ramesh123'){
        echo "Welcome you Logged in Sucessfully";
    }
    else{
        echo "No Entry Your Password is invalid";
    }
}
else{
    echo "No Entry Id wrong";
}







?>