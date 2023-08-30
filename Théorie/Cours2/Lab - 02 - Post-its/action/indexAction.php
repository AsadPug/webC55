<?php
    session_start();
    function execute(){
        if (empty($_SESSION["list"])){
            $_SESSION["list"] = []; 
        }
        if(!empty($_GET["texte"])){
            $postIt = [
                "texte" => $_GET["texte"],
                "x" => $_GET["x"],
                "y" => $_GET["y"]   ];
            $_SESSION["list"][] = $postIt;
        }
        

        $list = $_SESSION["list"];
        return compact("list");
    }