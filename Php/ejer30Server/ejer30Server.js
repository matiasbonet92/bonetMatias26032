$("#ingresar").click(function(){
    var ajax = $.ajax({
        type: 'post',
        method: 'post',
        url: './ingresoAlSistema.php',
        data: {
            id: $("#login").val(),
            pass: $("#pass").val(),
        }
    });
});