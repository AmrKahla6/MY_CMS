<?php

    $dns      = "mysql:host=mysql5044.site4now.net; dbname=db_a6d541_cms2021";
    $username = "a6d541_cms2021";
    $pass     = "abc@123456";

    try {
        $pdo = new PDO($dns , $username , $pass);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


