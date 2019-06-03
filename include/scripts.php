    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
        $('ul.tabs').tabs();
    });
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    $(document).ready(function() {
        $('select').formSelect();
    });
    $("select").change(function() {
        var value = $('select')[0].selectedOptions[0].value;
        if (value === "Profesor") {
            $("#log-cedula")[0].value = "2";
            $("#log-password")[0].value = "123";
        } else if (value === "Estudiante") {
            $("#log-cedula")[0].value = "3";
            $("#log-password")[0].value = "123";
        }
        M.updateTextFields();
    });
    </script>