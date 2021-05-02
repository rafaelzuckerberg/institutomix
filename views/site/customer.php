

<div class="grid">
    <div class="row">
        <div class="col">
            <h3>Clientes</h3>
        </div>
    </div>
</div>


<div class="grid" style="margin-bottom: 0%">
    <div class="row">
        <div class="col-btn">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCustomer">
            Novo
            </button>
        </div>
    </div>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cidade</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <a href="#">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="#">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
                <a href="#">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="#">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>
                <a href="#">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="#">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
    </tbody>
</table>



<div class="modal" tabindex="-1" role="dialog" id="modalCustomer">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cadastrar Cliente</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Estados</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Pará</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Cidades</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Belém</option>
                        <option>Marabá</option>
                        <option>Bragança</option>
                    </select>
                </div>
            </form>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
</div>




<div class="modal" tabindex="-1" role="dialog" id="modalDeleteCustomer">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Deletar Cliente</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <h3>Deseja realmente deletar cliente? O cliente será deletado dos registros do Banco de dados!</h3>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger">Deletar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
</div>