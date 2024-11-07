<div class="modal fade" id="delete-{{ $tarefa->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('tarefa.delete', $tarefa->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <p class="d-flex justify-content-center"> tem certeza que deseja excluir {{ $tarefa->nome }} ?</p>

                <div class="modal-footer"></div>
                <button type="submit" class="btn btn-danger">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>


            </form>
        </div>
      </div>
    </div>
  </div>
