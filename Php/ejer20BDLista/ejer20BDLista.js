$(document).ready(function(){
    $("#input").val("nombre");
});

$("#cargarDatos").click(function(){
    $("#cuerpoTabla").empty();
    $("#cuerpoTabla").html("<h2>Esperando Respuesta ...</h2>");
    $("#input").val("nombre");

    var objAjax = $.ajax({
        type:"get",
        url:"./consultaJugadores.php",
        data: {},
        success: function(respuestaDelServer,estado) {
            console.log(respuestaDelServer);
            $("#cuerpoTabla").empty();
            ojbJson = JSON.parse(respuestaDelServer);
            ojbJson.jugadores.forEach(function(valor,indice){
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
                var activo = document.createElement("td");
                activo.setAttribute("campo-dato", "activo");
                activo.innerHTML = valor.activo;
                objTr.appendChild(activo);
                //creo sexto dato y agrego a la fila
                var edad = document.createElement("td");
                edad.setAttribute("campo-dato", "edad");
                edad.innerHTML = valor.edad;
                objTr.appendChild(edad);

                //coloco en TBody
                document.getElementById("cuerpoTabla").appendChild(objTr);
            });
            $("#registros").html("Numero de Registros: " + ojbJson.cuentaRegistros);
        }
    });
});

$("#vaciar").click(function(){
    $("#cuerpoTabla").empty();
    $("#registros").empty();
});