$(document).ready(function(){
    $('#guardar-registro').on('submit', function(e){
      e.preventDefault();
      let datos = $(this).serializeArray();
      $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        success: function(data){
          console.log(data);
          let resultado = data;
          if(resultado.respuesta == 'exito'){
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Se guardó correctamente!',
              showConfirmButton: false,
              timer: 1200
            }).then(document.getElementById("guardar-registro").reset());
            
          } else {
            Swal.fire({
              position: 'center',
              icon: 'warning',
              title: 'No hay cambios registrados!',
            })
          }
        }
      });
    });
    
    //Se ejecuta cuando hay un archivo
    $('#guardar-registro-archivo').on('submit', function(e){
      e.preventDefault();
      let datos = new FormData(this);
      $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType: 'json',
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function(data){
          console.log(data);
          let resultado = data;
          if(resultado.respuesta == 'exito'){
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Se guardó correctamente!',
              showConfirmButton: false,
              timer: 1200
            }).then(document.getElementById("guardar-registro").reset());
          } else {
            Swal.fire({
              position: 'center',
              icon: 'warning',
              title: 'No hay cambios registrados!',
            })
          }
        }
      });
    });

    $('.borrar-registro').on('click', function(e){
    e.preventDefault();
    let id =$(this).attr('data-id');
    let tipo = $(this).attr('data-tipo');
    Swal.fire({
      title: 'Estás seguro?',
      text: "Acción es irreversible!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminar!',
      cancelButtonText: 'Cancelar'
    }).then((resultado) => {
      if (resultado.value) {
    $.ajax({
      type:'post',
      data: {
        'id' : id,
        'registro' : 'eliminar',
        },
        url: 'modelo-'+tipo+'.php',
        success:function(data){
          let resultado = JSON.parse(data);
          if(resultado.respuesta == 'exito'){
            Swal.fire(
              'Eliminado!',
              'Registro liminado.',
              'success',
            )
            jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
            }
          }
        })
      }
    });
    });


});
