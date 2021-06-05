<?php  

        sleep(4);
        
        if (isset($_POST["frase"])) {
            $frase = $_POST["frase"];
            $cencriptadamd5 = md5($frase);
            $cencriptadasha1 = sha1($frase);

            echo "<h3 style='margin-left: 50px; margin-top: 50px;'>Clave: $frase </h3>";echo"<br>";
            echo "<h3 style='margin-left: 50px;'>Clave encriptada en md5 (128 bits o 16 pares de Hexadecimales): $cencriptadamd5</h3>";echo"<br>";echo"<br>";
            echo "<h3 style='margin-left: 50px;'>Clave: $frase</h3>";echo"<br>";
            echo "<h3 style='margin-left: 50px;'>Clave encriptada en sha1 (160 bits o 20 pares de Hexadecimales): $cencriptadasha1</h3>";echo"<br>";echo"<br>";

        }
?> 