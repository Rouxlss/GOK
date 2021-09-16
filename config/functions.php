<?php

function connection($bdConfig){

    try {
        $connection = new PDO("mysql:host=" . $bdConfig['host'] . ";dbname=" . $bdConfig['db'], $bdConfig['user'], $bdConfig['password']);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $e) {
        return $e->getMessage();
        die();
    }
}