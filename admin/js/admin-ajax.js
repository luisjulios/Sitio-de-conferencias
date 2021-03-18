$(document).ready(function(){
  $('#crear-admin').on('submit', function(e){
    e.preventDefault();
    let datos = $(this).serializeArray();
    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        let resultado = data;
        if(resultado.respuesta == 'exito'){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Administrador agregado correctamente!',
            showConfirmButton: false,
            timer: 1200
          })
        } else {
          Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Usuario ya existe!',
          })
        }
      }
    });
  });
  $('#login-admin').on('submit', function(e){
    e.preventDefault();
    let datos = $(this).serializeArray();
    $.ajax({
      type: $(this).attr('method'),
      data: datos,
      url: $(this).attr('action'),
      dataType: 'json',
      success: function(data){
        let resultado = data;
        if(resultado.respuesta == 'exitoso'){
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Bienvenid@ '+ resultado.usuario+'!!',
            showConfirmButton: false,
            timer: 1200
          })
          setTimeout(function(){
            window.location.href = 'admin-area.php';
          }, 2000);
        } else {
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Usuario/password incorrecto!',
            showConfirmButton: false,
            timer: 1200
          })
        }
      }
    })
  });
});
