<?php  
        sleep(3);

        $objDatos = new stdclass;
        
        $objDatos->id = $_POST["id"];
        $objDatos->login = $_POST["login"];
        $objDatos->apellido = $_POST["apellido"];
        $objDatos->nombres = $_POST["nombres"];
        $objDatos->fechaNac = $_POST["nac"];

        $jsonObjDatos = json_encode($objDatos);

        echo "<span> $jsonObjDatos </span>";
?> 