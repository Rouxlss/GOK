<?php

require('./config/config.php');
require('./config/functions.php');

$connection = connection($bdconfig);

// include './views/formulario.view.php';

include './public/routes.php';
