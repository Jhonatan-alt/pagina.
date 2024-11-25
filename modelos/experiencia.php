<div class="modal fade" id="modalUsuario">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_modal"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="usuario_form">
                <input type="hidden" name="usu_id" id="usu_id">
                <div class="row mb-3 mx-2 my-1">
                    <label for="nombre" class="col-form-label">Empresa:</label>  
                    <div class="col">                                
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre de la empresa del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_paterno" class="col-form-label">Puesto:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_paterno" id="ape_paterno" placeholder="Ingrese el puesto del usuario">
                    </div>       
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_materno" class="col-form-label">Fecha Inicio:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_materno" id="ape_materno" placeholder="Ingrese la fecha de inicio del usuario">
                    </div>
                </div>     
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_correo" class="col-form-label">Fecha Fin:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="usu_correo" id="usu_correo" placeholder="Ingrese la fecha final del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_pass" class="col-form-label">Estado:</label>
                    <div class="col">                                
                        <input class="form-control" name="usu_pass" id="usu_pass" placeholder="Ingrese el estado del usuario">
                    </div>
                </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" name="action" value="add">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>