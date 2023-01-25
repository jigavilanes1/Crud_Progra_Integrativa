function cloneFormularios( $frm1 , $frm2 ) {
        $(':input[name]', $frm2).val(function() {
          return $(':input[name=' + this.name + ']', $frm1).val();
        });
      }
    //Al hacer click en un btn copiar
      $('#copiar').on('click', function() {
        cloneFormularios(  $('#form1') , $('#form2')  );
      });
function imprimir(){
	escribir = document.getElementById("caja");
	codigo = "<p><b>Codigo: </b>" + document.form1.codigo.value + "</p>";
	nombre = "<p><b>Nombres: </b>" + document.form1.nombre.value + "</p>";
	apellido = "<p><b>Apellidos: </b>" + document.form1.apellidos.value + "</p>";
	cedula = "<p><b>Cedula: </b>" + document.form1.cedula.value + "</p>";
	genero = "<p><b>Genero: </b>" + document.form1.genero.value + "</p>";
	fechan = "<p><b>Fecha Nacimiento: </b>" + document.form1.nacido.value + "</p>";
	edad = "<p><b>Edad: </b>" + document.form1.edad.value + "</p>";
	escribir.innerHTML = codigo+nombre+apellido+cedula+genero+fechan+edad;
}