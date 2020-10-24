$(document).ready(function ()
    {
        var table = $('#dataTable').DataTable();

        table.on('click', '.edit', function()
        {
            $tr = $(this).closest('tr');
            if($($tr).hasclass('child'))
            {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#nombre').val(data[1]);
            $('#apellido').val(data[2]);

            $('editForm').attr('action', '/nombres/'+data[0]);
            $('#editModal').modal('show');
        });
    });
