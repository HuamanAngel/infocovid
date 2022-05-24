@extends('layouts.template')

@section('contenido')
        
    <p class="h1 text-center p-3">Editar Información</p>
   <div class="container align-content-center p-4">

      <form name = addForm class="px-5 py-3 ">
        
     
        <div class="form-group">
          <label>Usuario</label>
          <input type="text" class="form-control" id="exampleDropdownFormText" placeholder="Pedro Pablo">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormEmail1">Correo de Recuperación</label>
          <input type="email" class="form-control" id="correo" placeholder="email@example.com">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormPassword1">Contraseña</label>
          <input type="password" class="form-control" id="txt_contraseña" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <label for="exampleDropdownFormPassword1">Confirmar contraseña</label>
          <input type="password" class="form-control" id="txt_confirmar" placeholder="Contraseña">
        </div>
        <div id="alerta"></div>
        <div class="form-group">
          <label>Distrito</label>
              <select inputmode="text" class="form-control" id="exampleDropdownFormText" placeholder="Distrito">
                <option>Ate</option>
                <option>Barranca</option>
                <option>Bellavista</option>
                <option>Breña </option>
                <option>Carmen de la Legua</option>
                <option>Cercado de Lima</option>
                <option>Comas</option>
                <option>Chorrillos</option>
                <option>El Agustino</option>
                <option>Jesús Maria</option>
                <option>La Molina</option>
                <option>La Perla</option>
                <option>La Punta</option>
                <option>La Victoria</option>
                <option>Lince</option>
                <option>Magdalena</option>
                <option>Miraflores</option>
                <option>Pueblo Libre</option>
                <option>Puente Piedra</option>
                <option>Rimac</option>
                <option>San Isidro</option>
                <option>San Juan de Lurigancho</option>
                <option>San Juan de Miraflores</option>
                <option>San Luis</option>
                <option>San Martin de Porres</option>
                <option>San Miguel</option>
                <option>Santiago de Surco</option>
                <option>Surquillo</option>
                <option>Santa Rosa</option>
                <option>Ventanilla</option>
                <option>Villa El Salvador</option>
                <option>Villa Maria del Triunfo</option>
            </select>
            </div>
            <button type="button" onclick="validarForm();" class="btn btn-primary m-2">Actualizar</button>
          </div>
      
      </form>
   
    </div>
<script>
  function validarForm(){
    var formulario = document.addForm;
    //Validación de contraseñas
    if(formulario.txt_contraseña.value != formulario.txt_confirmar){
      document.getElementById("alerta").innerHTML = '<div class ="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Las contraseñas ingresadas no son iguales. </div>'
      formulario.txt_contraseña.value = "";
      formulario.txt_confirmar.value="";
      formulario.txt_contraseña.focus();
      return false;
    }else{
      document.getElementById("alerta").innerHTML ="";
    }
  }
</script>
@endsection