<?php
if (isset($_REQUEST['Controller'])) {
    if ($_REQUEST['Controller'] == 'Proprietaire') {
        require_once(ROUTE_DIR . 'Controller/Proprietaire.Controller.php');
    } elseif ($_REQUEST['Controller'] == "Vehicule") {
        require_once(ROUTE_DIR . "Controller/Vehicule.Controller.php");
    }
}