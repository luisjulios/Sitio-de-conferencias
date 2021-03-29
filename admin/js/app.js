  $(document).ready(function () {
      $('.sidebar-menu').tree();
      $('#registros').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        'language' : {
          paginate: {
            next: 'Siguiente',
            previous: 'Anterior',
            first : 'Primero',
            last: 'Último',
          },
          info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
          emptyTable: 'No hay registros',
          infoEmpty: 'No hay registros',
          search: 'Buscar:'
        }
      });

    $('#crear_registro_admin').attr('disabled', true);
    $('#repetir_password').on('input', function(){
      let password_nuevo = $('#password').val();
      if($(this).val() == password_nuevo) {
        $('#resultado_password').text('Correcto!');
        $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#crear_registro_admin').attr('disabled', false);
      } else {
        $('#resultado_password').text('No son iguales!');
        $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('#crear_registro_admin').attr('disabled', true);
      }
    });
        //Date picker
        $('#fecha').datepicker({
          autoclose: true
        });
        $('.seleccionar').select2();

        $('#icono').iconpicker();

    })
    
    $(document).ready(function () {

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass   : 'iradio_minimal-blue'
            })
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
              checkboxClass: 'icheckbox_minimal-red',
              radioClass   : 'iradio_minimal-red'
            })
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
              checkboxClass: 'icheckbox_flat-green',
              radioClass   : 'iradio_flat-green'
            })
          });
