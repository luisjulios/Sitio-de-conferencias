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
  })