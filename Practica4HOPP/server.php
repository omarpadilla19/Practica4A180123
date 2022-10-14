<?php
require_once "lib/nusoap.php";
function getJuegos($datos){
    if ($datos == "Juegos"){
        return join(",", array(
            "FIFA 2022",
            "MARIO BROSS",
            "BATTEFIELD",
            "ARMY OF TWO",
            "Call Of duty",
            "GTA V",
            "Child of Eden",
            "Far cry",
            "Ninja",
            "Risen",
            "crysis 3",
            "Forza Horizon",
            "WARZONE",
            "Halo"));
    }
    else {
        return "No hay Juegos";
    }
   
}
$server = new soap_server();
$server->register("getJuegos");
if (!isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents('php://input' );
$server->service($HTTP_RAW_POST_DATA);
?>