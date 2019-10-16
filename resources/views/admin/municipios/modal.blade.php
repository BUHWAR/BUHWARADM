<div class="modal fade" id="modal-dialog-{{$municipio->id}}" tabindex="-1" role="dialog" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar municipio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form  action="{{route('admin.municipios.destroy',$municipio->id)}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <div class="modal-body">
    
                        <p>¿Estas seguro que deseas eliminar el municipio?</p>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>