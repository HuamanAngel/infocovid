<table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($medicinasShow as $medicinaShow)
        <tr data-id="{{$medicinaShow->id}}">
          <td>{{$medicinaShow->name_medi}}</td>
          <td>{{$medicinaShow->descripcion_medi}}</td>
          <td>{{$medicinaShow->precio_med}}</td>
          <td>{{$medicinaShow->cantidad}}</td>
          <td>
            <a href="#" class="btn btn-secondary" onclick="datosMedicina('{{$medicinaShow->name_medi}}','{{$medicinaShow->descripcion_medi}}',{{$medicinaShow->precio_med}},{{$medicinaShow->cantidad}},{{$medicinaShow->id}})" data-toggle="modal" data-target="#ventanaModalUpdateMedi1">
              <i class="fas fa-marker"></i>
            </a>

            <a class="btn btn-danger borrarMediNow">
              <i class="far fa-trash-alt"></i>
            </a>
          </td>
        </tr>
          
      @endforeach

    </tbody>
  </table>
  {{$medicinasShow->render()}}
