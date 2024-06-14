<?php
$role = "admin";
try{
    if($role="admin"){
        echo "Login successful";
    }else{
       throw new Exception("Login failed");
    }

}catch(Exception $e){
    echo "<pre/>";
}