

<div class="modal fade" id="crearzona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h5 class="modal-title">Añadir nueva zona</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">

      <form action="{{ route('zonas.store') }}" method="POST">
        @csrf

        {{----------------------------------------------------------------------------------------------------------------------}}


        <div class="form-group">
          <div class="col">
            <input type="text" name="zona" class="form-control" placeholder="Zona">
          </div>
          <div style="height: 10px"></div>
          <div class="col">
            <textarea type="text" name="descripcion" placeholder="Descrpcion de la zona" class="form-control"
              style="height:180px"></textarea>
          </div>


          <div style="height: 10px"></div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">{{__('buttons.save')}}</button>
          </div>

          <div style="height: 12px"></div>
        </div>

      </form>
    </div>
  </div>
</div>
</div>