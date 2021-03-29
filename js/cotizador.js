(function() {
  "use strict";
  let regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function(){
      //Campos Datos Usuarios
      let nombre = document.getElementById('nombre');
      let apellido = document.getElementById('apellido');
      let email = document.getElementById('email');

      //Campos pases
      let pase_dia = document.getElementById('pase_dia');
      let pase_dosdias = document.getElementById('pase_dosdias');
      let pase_completo = document.getElementById('pase_completo');

      //Botones y divs
      let calcular = document.getElementById('calcular');
      let errorDiv = document.getElementById('error');
      let botonRegistro = document.getElementById('btnRegistro');
      let lista_productos = document.getElementById('lista-productos');
      let suma = document.getElementById('suma-total');

      //Extras
      let camisas = document.getElementById('camisa_evento');
      let etiquetas = document.getElementById('etiquetas');

      if(botonRegistro) {
      botonRegistro.disabled=true; //Deshabilitamos botón de pagar
      }
      if (document.getElementById('calcular')) {
          
      

      calcular.addEventListener('click', calcularMontos);
      pase_dia.addEventListener('click', mostrarDias);
      pase_dosdias.addEventListener('click', mostrarDias);
      pase_completo.addEventListener('click', mostrarDias);

      nombre.addEventListener('blur', validarCampos);
      apellido.addEventListener('blur', validarCampos);
      email.addEventListener('blur', validarCampos);
      email.addEventListener('blur', validarEmail);

      function validarCampos() {
          if(this.value == '') {
              errorDiv.style.display = 'block';
              errorDiv.innerHTML= "Este campo es obligatorio";
              this.style.border = '3px solid red';
              errorDiv.style.border = '3px solid red';
          } else {
              errorDiv.style.display = 'none';
              this.style.border = '2px solid #008000';
          }
      }

      function validarEmail() {
          if(this.value.indexOf("@gmail") > -1) {
              errorDiv.style.display = 'none';
              this.style.border = '2px solid #008000';
          } else {
              errorDiv.style.display = 'block';
              errorDiv.innerHTML= "Debe ser un correo electrónico Gmail";
              this.style.border = '3px solid red';
              errorDiv.style.border = '3px solid red';
          }

      }


      function calcularMontos(event){
          event.preventDefault();
          if (regalo.value === '') {
              alert("Debes elegir un regalo");
              regalo.focus();
          } else {
              let boletosDia = parseInt (pase_dia.value, 10)|| 0,
              boletoDosDias = parseInt (pase_dosdias.value, 10)|| 0,
              boletoCompleto = parseInt (pase_completo.value, 10)|| 0,
              cantCamisas = parseInt (camisas.value, 10)|| 0,
              cantEtiquetas = parseInt (etiquetas.value, 10)|| 0;


              let totalPagar = (boletosDia * 30) + (boletoDosDias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

              let listadoProductos = []

              if(boletosDia >= 1){
                  listadoProductos.push(boletosDia+ ' Pase(s) por día');
              } if (boletoDosDias >= 1){
                  listadoProductos.push(boletoDosDias+ ' Pase(s) por 2 días');
              } if (boletoCompleto >= 1){
                  listadoProductos.push(boletoCompleto+ ' Pase(s) completo(s)');
              } if (cantCamisas >= 1){
                  listadoProductos.push(cantCamisas+ ' Camisa(s)');
              } if (cantEtiquetas >= 1){
                  listadoProductos.push(cantEtiquetas+ ' Etiqueta(s)');
              }

              
              lista_productos.style.display = 'block';
              lista_productos.innerHTML = '';
              for(let i = 0; i< listadoProductos.length; i++) {
                  lista_productos.innerHTML += listadoProductos[i] + '<br/>';
              }

              suma.innerHTML = "$ " + totalPagar.toFixed(2);

              botonRegistro.disabled = false;
              document.getElementById('total_pedido').value = totalPagar;

          }
      }


      function mostrarDias(){
          let boletosDia = parseInt (pase_dia.value, 10)|| 0,
              boletoDosDias = parseInt (pase_dosdias.value, 10)|| 0,
              boletoCompleto = parseInt (pase_completo.value, 10)|| 0;
          let diasElegidos = [];
          if (boletosDia > 0 ){
              diasElegidos.push('viernes');
          }
          if (boletoDosDias > 0 ){
              diasElegidos.push('viernes', 'sabado');
          }
          if (boletoCompleto > 0 ){
              diasElegidos.push('viernes', 'sabado', 'domingo');
          }
          document.getElementById('viernes').style.display = 'none';
          document.getElementById('sabado').style.display = 'none';
          document.getElementById('domingo').style.display = 'none';
          for (let i = 0; i < diasElegidos.length; i++){
              document.getElementById(diasElegidos[i]).style.display = 'block';
          }
      }

  }
  


  }); //DOM CONTENT LOADED
})();