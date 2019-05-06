$('#register').submit(function(event) { 
    event.preventDefault();
    
 
    var datos = {
        name: $("#reg-nombre").val(),
        ced: $("#reg-cedula").val(),
        pass: $("#reg-password")[0].value,
    };
    
    console.log(datos);
    jQuery.post("singup.php", datos, function (response) {
            console.log(response);
            $('#register').trigger('reset');
        }
    );
});

$('#login').submit(function(event) { 
    event.preventDefault();    

    var datos = {
        ced: $("#log-cedula").val(),
        pass: $("#log-password")[0].value,
    };
    
    console.log(datos);
    jQuery.post("login.php", datos, function (response) {
            $('#login').trigger('reset');
            if(response === "redir") {
                window.location = "/cursos";
            }
        }
    );
});