


var request_r;
    
    // Bind to the submit event of our form
    $("#form_reporte").submit(function(event){
    
        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();
    
        // Abort any pending request
        if (request_r) {
            request_r.abort();
        }
        // setup some local variables
        var $form = $(this);
    
        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
    
        // Serialize the data in the form
        var serializedData = $form.serialize();
    
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
    
        // Fire off the request to /form.php
        request_r = $.ajax({
            url: "reporte.php",
            type: "post",
            data: serializedData
        });
    
        // Callback handler that will be called on success
        request_r.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            //console.log("Hooray, it worked!");
            //alert("Registro ingresado");
            console.log(response);
            console.log("reporte");


            document.getElementById("datos_mostrar_reporte").innerHTML = response;

        });
    
        // Callback handler that will be called on failure
        request_r.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            //console.error(
            //    "The following error occurred: "+
            //    textStatus, errorThrown
            //);
             //alert("No se pudo ingresar el registro");
        });
    
        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request_r.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });
    
    });