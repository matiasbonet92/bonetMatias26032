<?php  
        sleep(3);

        $objDatos = new stdclass;
        
        if (isset($_POST["id"])) {
            $objDatos->id = $_POST["id"];
        }
        if (isset($_POST["login"])) {
            $objDatos->login = $_POST["login"];
        }
        if (isset($_POST["apellido"])) {
            $objDatos->apellido = $_POST["apellido"];
        }
        if (isset($_POST["nombres"])) {
            $objDatos->nombres = $_POST["nombres"];
        }
        if (isset($_POST["nac"])) {
            $objDatos->fechaNac = $_POST["nac"];
        }

        $jsonObjDatos = json_encode($objDatos);

        echo $jsonObjDatos;
?> 