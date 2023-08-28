<?php 
// $_POST["id"]

if($_POST["id"] == 'Nahid'){
    if($_POST["password"] == "Nahid123"){
        echo "Welcome You to Logged In Successfully";
    }else{
        echo "wrong password";
    }
}else{
    echo "No Entry your cradantials are wrong! please login with valid information.";
}