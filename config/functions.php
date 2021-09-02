<?php

function connection($bdConfig ){

    try {

        $connection = new PDO("mysql:host=" . $bdConfig['host'] . ";dbname=" . $bdConfig['db'], $bdConfig['user'], $bdConfig['password']);
        return $connection;

    } catch (PDOException $e) {

        return $e->getMessage();
        die();
    }

}




?>