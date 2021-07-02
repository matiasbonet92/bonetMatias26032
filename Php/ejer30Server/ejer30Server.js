$("#ingresar").click(function(){
    var ajax = $.ajax({
        type: 'get',
        url: './ingresoAlSistema.php',
        data: {
            id: $("#login").val(),
            pass: $("#pass").val(),
        }
    });
});