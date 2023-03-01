<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">Código do Pedido</th>
            <th scope="col">Data da entrega</th>
            <th scope="col">Hora da entrega </th>
            <th scope="col">Endereço</th>
            <th scope="col">Quantidade do Pedido</th>
            <th scope="col">Valor</th>
            <th scope="col" colspan="2">Açoes</th>
        </tr>
    </thead>
    <tbody>

        <?php


        foreach ($this->datas["request"] as $data) {
            extract($data);
            echo (" <tr class=''>
            <td scope='row'> $idPedido</td>
            <td> $dataEntrega</td>
            <td> $hora</td>
            <td> $endereco</td>
            <td> $quantidadePedido</td>
            <td> $valorPedido</td>
            <td>


                    <button type='button' class='btn btn-outline-success ' data-bs-toggle='modal' data-bs-target='#edit$idPedido'>
                        <i class='bi bi-pencil'></i> <span>Editar Pedido</span>
                    </button>
                    <button  type='button' class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#cancel$idPedido'>
                        <i class='bi    bi-trash'></i> <span>Cancelar</span>
                    </button>
            </td>
        </tr>
        <div class='modal fade' id='cancel$idPedido' tabindex='-1'  role='dialog' aria-labelledby='modalTitleId' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-scrollable modal-dialog-centered modal' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalTitleId'>Jutifique seu cancelamento!</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                            <h6>Codigo do Pedido</h6>
                            <input type='text' name='justificativa' id='codigoPedido' value ='$idPedido'  required class='form-control'>
                            <h6>Sua justificativa!</h6>
                            <input type='text' name='justificativa' id='justify' required class='form-control'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>cancelar</button>
                        <button id='justifyCancel' type='button' class='btn btn-primary'>Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class='modal fade' id='edit$idPedido' tabindex='-1'  role='dialog' aria-labelledby='modalTitleId' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-scrollable modal-dialog-centered modal' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='modalTitleId'>Indique o dado que você quer mudar!</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                            <h6>Codigo do Pedido</h6>
                            <input type='text' name='justificativa' id='codigoPedido' value ='$idPedido' required class='form-control'>
                            <h6>Dados do pedido a ser mudado!</h6>
                            <input type='text' name='dado' id='dado' required class='form-control'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>cancelar</button>
                        <button id='edit' type='button' class='btn btn-primary'>Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        const inputElementCancel = document.querySelector("#justifyCancel");
        const inputText = document.querySelector("#justify");
        const codigoPedido = document.querySelector("#codigoPedido");

        inputElementCancel.addEventListener("click", () => {

            let justify = inputText.value;
            let codigo = codigoPedido.value;
            console.log(justify);
            window.location.href = `https://wa.me/5521982441600?text=Olá!Queria efetuar o cancelamento do meu pedido! CODIGO DO PEDIDO:${codigo}!Minha justificativa:${justify}.`;
        })
        ");
        }


        ?>


    </tbody>
</table>