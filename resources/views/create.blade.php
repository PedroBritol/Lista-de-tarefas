<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Inserir uma tarefa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('tarefa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome da tarefa</label>
                  <input required type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>
                <div class="mb-3">
                    <label for="custo" class="form-label">Custo</label>
                    <input required type="number" class="form-control" id="custo" aria-describedby="emailHelp" name="custo">
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data</label>
                    <input required type="date" class="form-control" id="data" aria-describedby="emailHelp" name="data">
                </div>

                <div class="modal-footer"></div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
            </form>
        </div>
      </div>
    </div>


  </div>
