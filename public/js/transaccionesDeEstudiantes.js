$(document).ready(function ()
{
    //AGREGAR
        $('#agregarForm').on('submit', function(e)
        {
            e.preventDefault();
            $.ajax
            ({
                type: "POST",
                url: "/registrar",
                data: $('#agregarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#agregarEstudiante').modal('hide')
                    alert("/n" + "Registro exitoso!");
                    location.reload();
                    $('#agregarForm')[0].reset()
                },
                error: function(error)
                {
                    console.log(error)
                    alert("Error de registro, inténtelo nuevamente!");
                }
            });
        });


    //CONSULTAR
        $('.btnMostrar').on('click', function()
        {
            $('#mostrarEstudiante').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idMostrar').val(data[0]);
            $('#nombre1').val(data[1]);
            $('#apellido1').val(data[2]);
        });


    //ACTUALIZAR
        $('.btnEditar').on('click', function()
        {
            $('#editarEstudiante').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEditar').val(data[0]);
            $('#nombre').val(data[1]);
            $('#apellido').val(data[2]);
        });

        $('#editarEstudiante').on('submit', function(e)
        { 
            e.preventDefault();
            var id = $('#idEditar').val();
            $.ajax
            ({
                type: "PUT",
                url: "/actualizar/"+id,
                data: $('#editarForm').serialize(),
                success: function (response)
                {
                    console.log(response)
                    $('#editarEstudiante').modal('hide')
                    alert("Actualización de datos exitosa!");
                    location.reload();
                },
                error: function(error)
                {
                    console.log(error)
                    alert("Error de actualización, inténtelo nuevamente!");
                }
            });
        });
      

    //ELIMINAR
        $('.btnEliminar').on('click', function()
        {
            $('#eliminarEstudiante').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function()
            {
                return $(this).text();
            }).get();
            console.log(data);
            $('#idEliminar').val(data[0]);
            $('#nombre3').val(data[1]);
            $('#apellido3').val(data[2]);
        });
        $('#eliminarForm').on('submit', function(e)
        {
            e.preventDefault();
            var id = $('#idEliminar').val();

            $.ajax
            ({
                type: "DELETE",
                url: "/eliminar/"+id,
                data: $('#eliminarForm').serialize(),
                success: function (response)
                {
                    console.log(response);
                    $('#eliminarEstudiante').modal('hide');
                    alert('Registro eliminado correctamente!');
                    location.reload();
                },
                error: function(error)
                {
                    console.log(error)
                    alert("Error, inténtelo nuevamente!");
                }
            });     
        });
});
