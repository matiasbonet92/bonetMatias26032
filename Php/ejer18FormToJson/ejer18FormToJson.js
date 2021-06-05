$("#enviar").click(function(){
    $("#respuesta").empty();
    $("#respuesta").addClass("estiloRecibiendo");
    $("#respuesta").html("<h2 style='margin-left: 20px; margin-top: 5px; color: darkblue;'>Esperando Respuesta ...</h2>");

    $.ajax({
        type:"post",
        url:"./Respuesta.php",
        data: 
        {
            id: $("#id").val(),
            login: $("#login").val(),
            apellido: $("#apellido").val(),
            nombres: $("#nombres").val(),
            fechaNac: $("#nacimiento").val(),
        },
        success: function(respuestaDelServer,estado) {
            $("#respuesta").removeClass("estiloRecibiendo");
            $("#respuesta").html("<h2 style='margin-left: 20px; margin-top: 5px; color: darkblue;'>Resultado de la transformacion a JSON en el servidor: </h2><h4 style='margin-top: 12px; margin-left:10px;'>" + respuestaDelServer + "</h4>");
        }
    });
});

$("#btnModal").click(function(){
    document.getElementById('contenedor').className="contDesactivo";
    document.getElementById('modal').className="modalActiva";
});

$("#cerrar").click(function(){
    document.getElementById('modal').className="modalDesactivo";
    document.getElementById('contenedor').className="contActivo";
});