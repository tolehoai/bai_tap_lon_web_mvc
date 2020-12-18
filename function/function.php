<?php
     function CheckLogin(){
        if(!isset($_SESSION["AdminLogin"])){
            $url=URL."Admin";
            header("Location: $url");
        }
    }
?>