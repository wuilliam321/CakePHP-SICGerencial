(function($) {
 "use strict";

    $(function()
    {
        // Validation for login form
        $("#sky-form").validate(
        {                   
            // Rules for form validation
            rules:
            {
                UserUsername:
                {
                    required: true,
                },
                UserPassword:
                {
                    required: true,
                    minlength: 3
                }
            },
                                
            // Messages for form validation
            messages:
            {
                UserUsername:
                {
                    required: 'Por favor, indicar un nombre de usuario',
                },
                UserPassword:
                {
                    required: 'Por favor ingresar su clave',
                    minlength: 'Su clave debe tener al menos 3 digitos'
                }
            },                  
            
            // Do not change code below
            errorPlacement: function(error, element)
            {
                error.insertAfter(element.parent());
            }
        });
    });         

})(jQuery);