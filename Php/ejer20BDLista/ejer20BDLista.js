$("#cargarDatos").click(function(){
    $("#cuerpoTabla").empty();
    $("#cuerpoTabla").html("<h2>Esperando Respuesta ...</h2>");

    $.ajax({
        type:"get",
        url:"./consultaJugadores.php",
        data: {},
        success: function(respuestaDelServer,estado) {
            $("#cuerpoTabla").empty();
            var ojbJson = JSON.parse(respuestaDelServer);
            ojbJson.jugadores.foreach(function(valor,indice){
                //creo fila
                var objTr = document.createElement("tr");
                //creo primer dato y agrego a la fila
                var codigo = document.createElement("td");
                codigo.setAttribute("campo-dato", "codjug");
                codigo.innerHTML = valor.codjug;
                objTr.appendChild(codigo);
                //creo segundo dato y agrego a la fila
                var nombre = document.createElement("td");
                nombre.setAttribute("campo-dato", "nombre");
                nombre.innerHTML = valor.nombre;
                objTr.appendChild(nombre);
                //creo tercer dato y agrego a la fila
                var fnac = document.createElement("td");
                fnac.setAttribute("campo-dato", "fecha_nacimiento");
                fnac.innerHTML = valor.fecha_nacimiento;
                objTr.appendChild(fnac);
                //creo cuarto dato y agrego a la fila
                var equipo = document.createElement("td");
                equipo.setAttribute("campo-dato", "equipo");
                equipo.innerHTML = valor.equipo;
                objTr.appendChild(equipo);
                //creo quinto dato y agrego a la fila
                var pos = document.createElement("td");
                pos.setAttribute("campo-dato", "activo");
                pos.innerHTML = valor.activo;
                objTr.appendChild(pos);
                //creo sexto dato y agrego a la fila
                var edad = document.createElement("td");
                edad.setAttribute("campo-dato", "edad");
                edad.innerHTML = valor.edad;
                objTr.appendChild(edad);

                //coloco en TBody
                document.getElementById("#cuerpoTabla").appendChild(objTr);
            });
            $("#registros").html("Numero de Registros: " + ojbJson.cuentaRegistros);
            $("input").val(ojbJson.jugadores.nombre);
        }
    });
});

$("#vaciar").click(function(){
    $("#cuerpoTabla").empty();
});