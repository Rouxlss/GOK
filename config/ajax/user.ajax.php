<?php

    include("../config.php");
    include('../functions.php');

    $connection = connection($bdconfig);

    // echo "AA";

    if($_POST['action'] == "Registrar") {
        $nombre_Apellido = $_POST['nombre_Apellido'];
        $nombre_Apellido_utf8 = utf8_decode($nombre_Apellido);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];    
        $genero_value = $_POST['genero_value'];
        
        $id = hash('adler32', $nombre_Apellido.$email.$number);
        $password_hash = hash('sha512', $password);
        // echo $id . $nombre_Apellido . $email . $password . $number . $genero_value;

        $Query = 'insert into tbl_users values(:n1, :n2, :n3, :n4, :n5, :n6, :n7)';
        $statement = $connection->prepare($Query);
        $statement->execute(
            array(
                ':n1'=>$id,
                ':n2'=>$nombre_Apellido_utf8,
                ':n3'=>$email,
                ':n4'=>$password_hash,
                ':n5'=>$number,
                ':n6'=>$genero_value,
                ':n7'=>date("Y-m-d H:i:s")
            )
        );

    //     $Query = "SELECT * FROM tbl_users";
    // $statement = $connection->prepare($Query);
    // $statement->execute();
    // $usuario = $statement->fetchAll();

    // print_r($usuario);
    }

    
?>