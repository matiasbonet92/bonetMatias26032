<?php  

        sleep(3);
        
        if (isset($_POST["frase"])) {
            $frase = $_POST["frase"];
            $cencriptadamd5 = md5($frase);
            $cencriptadasha1 = sha1($frase);

            echo "<span style='color: darkblue; font-style: italic; font-size: 16px;'>Clave: </span><span>$frase</span>";echo"<br>";
            echo "<span style='color: darkblue; font-style: italic; font-size: 16px;v'>Clave encriptada en md5 (128 bits o 16 pares de Hexadecimales): </span><span>$cencriptadamd5</span>";echo"<br>";
            echo "<span style='color: darkblue; font-style: italic; font-size: 16px;'>Clave: </span><span>$frase</span>";echo"<br>";
            echo "<span style='color: darkblue; font-style: italic; font-size: 16px;'>Clave encriptada en sha1 (160 bits o 20 pares de Hexadecimales): </span><span>$cencriptadasha1</span>";

        }
?> 