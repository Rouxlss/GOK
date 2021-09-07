<?php

    include './src/static/header.view.php';

    if(!isset($_GET['view'])){
        header('Location: ?view=main');
    }else {

        $view = $_GET['view'];

        switch ($view ) {
            case 'main':
                include './public/main.php';
                break;
            case 'lobby':
                include './public/lobby.php';
                break;
            case 'medals':
                include './public/medals.php';
                break;
            case 'worlds':
                include('./public/worlds.php');
                break;
            case 'game':
                include('./public/game.php');
                break;
 
            default:
                # code...
                break;
        }

    }
