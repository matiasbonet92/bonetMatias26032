
    //objetos para trabajar
    objCodArt = document.getElementById('codjugAlta');
    objNombre = document.getElementById('nombreAlta');
    $("#enviarAlta").attr("disabled",true);
    $("#modalRespuesta").css("visibility","hidden");

    //dato inicial de orden
    $("#orden").val("nombre");
    
    //funciones de click orden
    $("#codjug").click(function(){
        $("#orden").val("codjug");
        cargaTabla();
    });
    $("#nombre").click(function(){
        $("#orden").val("nombre");
        cargaTabla();
    });
    $("#fnac").click(function(){
        $("#orden").val("fecha_nacimiento");
        cargaTabla();
    });
    $("#equipo").click(function(){
        $("#orden").val("equipo");
        cargaTabla();
    });
    $("#activo").click(function(){
        $("#orden").val("activo");
        cargaTabla();
    });
    $("#edad").click(function(){
        $("#orden").val("edad");
        cargaTabla();
    });


//cierro sesion
$("#btCierraSesion").click(function() {
    location.href='../destruirSesion.php';
});

//carga tabla
$("#cargarDatos").click(function(){
    cargaTabla();
});

/////  CORROBORACIONES ON KEY UP ///////////

//codAlta
$("#codjugAlta").keyup(function(){
    dato = $("#codjugAlta").val();
    console.log(dato);
    if ((dato != "")) {
        $("#enviarAlta").attr("disabled",false);
        $("#enviarAlta").css("opacity","1");
    }else{
        $("#enviarAlta").attr("disabled",true);
        $("#enviarAlta").css("opacity","0.5");
    }
});

//codModi
$("#codjugModificacion").keyup(function(){
    dato = $("#codjugModificacion").val();
    console.log(dato);
    if ((dato != "")) {
        $("#enviarModificacion").attr("disabled",false);
        $("#enviarModificacion").css("opacity","1");
    }else{
        $("#enviarModificacion").attr("disabled",true);
        $("#enviarModificacion").css("opacity","0.5");
    }
});

///////////////////////////////////////////////////


//vacia tabla
$("#vaciar").click(function(){
    $("#cuerpoTabla").empty();
    $("#registros").empty();
});

//abre form de alta
$("#alta").click(function(){
    document.getElementById('contenedorBase').className="contDesactivo";
    document.getElementById('modalAlta').className="modalActiva";
    llenaEquiposAlta();
});

//envia alta
$("#enviarAlta").click(function(){
    
    var objAjax = $.ajax({
        type:"get",
        url:"./consultaKeyPrimario.php",
        data: { codjug: $("#codjugAlta").val() },
        success: function(respuestaDelServer) {
            console.log(respuestaDelServer);
            ojbJson = JSON.parse(respuestaDelServer);
            if ( ojbJson.cantRegistros != 0 ) {
                alert("El codigo del Jugador ya existe en la base de datos! No se pueden repetir, por favor escriba uno diferente.");
            }else{
                alta();
                cargaTabla();
            }
        }
    });
});

$("#enviarModificacion").click(function(){
    modificacion();
    cargaTabla();
});


////// CIERRES DE BOTONES //////////////////////

//cierra form alta
$("#cerrarAlta").click(function(){
    document.getElementById('modalAlta').className="modalDesactivo";
    document.getElementById('contenedorBase').className="contActivo";
    $("#codjugAlta").val("");
    $("#nombreAlta").val("");
    $("#nacAlta").val("");
    $("#equipoAlta").empty();
    $("#activoAlta").val("");
    $("#edadAlta").val("");
    $("#pdfAlta").val("");
    $("#enviarAlta").css("opacity","0.5");
    $("#enviarAlta").attr("disabled",true);
});

//cierra form modi
$("#cerrarModif").click(function(){
    document.getElementById('modalModificacion').className="modalDesModificacion";
    document.getElementById('contenedorBase').className="contActivoModificacion";
});

//cierra form respuesta
$("#cerrarRespuesta").click(function(){
    $("#modalRespuesta").css("visibility","hidden");
});

////////////////////////////////////////////////////////////////////////////////////////


//funcion de carga de tabla
function cargaTabla(){
    $("#cuerpoTabla").empty();
    $("#cuerpoTabla").html("<h2>Esperando Respuesta ...</h2>");

    var objAjax = $.ajax({
        type:"get",
        url:"./consultaJugadores.php",
        data: 
        {   orden: $("#orden").val(), 
            filtro_codigo: $("#inputCodJug").val(),
            filtro_nombre: $("#inputNombre").val(),
            filtro_fnac: $("#inputFNac").val(),
            filtro_equipo: $("#inputEquipo").val(),
            filtro_activo: $("#inputActivo").val(),
            filtro_edad: $("#inputEdad").val(),
        },
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
                //creo PDF boton y agrego a la fila
                var pdf = document.createElement("td");
                pdf.setAttribute("campo-dato", "pdf");
                pdf.innerHTML = "<button id='pdf' style='cursor:pointer;'>PDF</button>";
                pdf.onclick=function(){
                    cargarPdf(valor.codjug);
                }
                objTr.appendChild(pdf);
                //creo Modif boton y agrego a la fila
                var mod = document.createElement("td");
                mod.setAttribute("campo-dato", "modificacion");
                mod.innerHTML = "<button id='change' style='cursor:pointer;'>Modi</button>";
                mod.onclick=function(){
                    document.getElementById('contenedorBase').className="contenedorDesBase";
                    document.getElementById('modalModificacion').className="modalModifActivo";
                    llenaEquiposModificacion();
                    CompletarFichaModificacion(valor.codjug);
                }
                objTr.appendChild(mod);
                //creo Elim boton y agrego a la fila
                var elim = document.createElement("td");
                elim.setAttribute("campo-dato", "eliminar");
                elim.innerHTML = "<button id='delete' style='cursor:pointer;'>Baja</button>";
                elim.onclick=function(){
                    baja(valor.codjug);
                }
                objTr.appendChild(elim);

                //coloco en TBody
                document.getElementById("cuerpoTabla").appendChild(objTr);
            });
            $("#registros").html("Numero de Registros: " + ojbJson.cuentaRegistros);
        }
    });
}

//funcion para llenar con los equipos el alta
function llenaEquiposAlta(){
    var objEquipos = $.ajax({
        type:"get",
        url:"./listaEquipos.php",
        data: {},
        success: function(respuestaDelServer,estado) {
            console.log(respuestaDelServer);
            ojbJsonEquipos = JSON.parse(respuestaDelServer);
            ojbJsonEquipos.equipos.forEach(function(valor,indice){
                var objetoOpcion = document.createElement("option");
                objetoOpcion.setAttribute("className", valor.equipo);
                objetoOpcion.setAttribute("name", valor.equipo);
                objetoOpcion.innerHTML = valor.equipo;
                document.getElementById("equipoAlta").appendChild(objetoOpcion);
            })
        }
    });
}

//funcion para llenar con los equipos la modi
function llenaEquiposModificacion(){
    var objEquipos = $.ajax({
        type:"get",
        url:"./listaEquipos.php",
        data: {},
        success: function(respuestaDelServer,estado) {
            console.log(respuestaDelServer);
            ojbJsonEquipos = JSON.parse(respuestaDelServer);
            ojbJsonEquipos.equipos.forEach(function(valor,indice){
                var objetoOpcion = document.createElement("option");
                objetoOpcion.setAttribute("className", valor.equipo);
                objetoOpcion.setAttribute("name", valor.equipo);
                objetoOpcion.innerHTML = valor.equipo;
                document.getElementById("equipoModificacion").appendChild(objetoOpcion);
            })
        }
    });
}

//Funcion para completar los datos en el contenedor modal de Modificacion
function CompletarFichaModificacion(valor){
    var codJugador = valor;
    var objAjax = $.ajax({
        type:"get",
        url:"./salidaJugadorModificar.php",
        data: {codjug: codJugador},
        success: function(respuestaDelServer,estado) {
            console.log(respuestaDelServer);
            ojbJson = JSON.parse(respuestaDelServer);
            ojbJson.jugador.forEach(function(valor,indice){
                $("#codjugModificacion").val(valor.codjug);
                $("#nombreModificacion").val(valor.nombre);
                $("#nacModificacion").val(valor.fecha_nacimiento);
                $("#equipoModificacion").val(valor.equipo);
                $("#activoModificacion").val(valor.activo);
                $("#edadModificacion").val(valor.edad);
            })
        }
    });
}

//funcion alta
function alta(){
    var dataAlta = new FormData($("#formAlta")[0]);

    var objAjax = $.ajax({
        type: 'post',
        method: 'post',
        enctype: 'multipart/form-data',
        url:"./alta.php",
        processData: false,
        contentType: false,
        cache: false,
        data: dataAlta,
    });
}

//funcion modificacion
function modificacion(){
    var dataModi = new FormData($("#formModificacion")[0]);

    var objAjax = $.ajax({
        type: 'post',
        method: 'post',
        enctype: 'multipart/form-data',
        url: "./modificacion.php",
        processData: false,
        contentType: false,
        cache: false,
        data: { dataModi },
    });
}

//funcion baja
function baja(codigo){
    var objAjax = $.ajax({
        type:"get",
        url:"./baja.php",
        data: 
        {
            codjug: codigo
        }
    });

    cargaTabla();
}

//funcion Carga PDF
function cargarPdf(codigo){
    var objAjax = $.ajax({
        type:"get",
        url:"./datosDoc.php",
        data: 
        {
            codjug: codigo
        },
        success: function(respuestaDelServer){
            console.log(respuestaDelServer);
            objPdf = JSON.parse(respuestaDelServer);
            console.log(respuestaDelServer);
            $("#modalRespuesta").css("visibility","visible");
            $("#bodyRespuesta").empty();
            $("#bodyRespuesta").html("<iframe width='100%' height='254px' src='data:application/pdf;base64,"+objPdf.documentoPdf+"'></iframe>");
        }
    });
}

