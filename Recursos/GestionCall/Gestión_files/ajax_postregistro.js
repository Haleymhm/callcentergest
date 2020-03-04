var request;

// Bind to the submit event of our form
$("#registro").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);
    var file_data = $('#pdfci').prop('files')[0];
   
    

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    //var serializedData = $form.serialize();
    data = new FormData($form[0]);

    if(file_data != undefined) {
        data.append('pdfci', file_data)
    }
    


       


    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "registrocall.php",
        type: "POST",
        data: data,
        dataType: 'text',
        contentType: false,
        cache: false,
        processData:false,
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        
        
        console.log( response);
        if(response == "3"){
            alert("No se pudo ingresar el registro, debido a que ya existe un archivo con el mismo nombre, cambia los nombres de los archivos e inténtalo de nuevo");
        }else{
            alert("Registro ingresado, el ID de la venta es " + response);
        }
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
         alert("No se pudo ingresar el registro");
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
        document.getElementById("registro").reset();
    });

});