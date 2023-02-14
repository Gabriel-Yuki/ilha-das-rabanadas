<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">Código do Pedido</th>
            <th scope="col">Data da entrega</th>
            <th scope="col">Hora da entrega </th>
            <th scope="col">Endereço</th>
            <th scope="col">Valor</th>
            <th scope="col" colspan="2">Açoes</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $teste = $this->datas["request"];

        var_dump($this->datas["request"]);
        for ($i = 0; $i < sizeof($this->datas["request"]); $i++) {
            extract($this->datas["request"][$i]);
            echo (" <tr class=''>
            <td scope='row'> $idPedido</td>
            <td> $dataEntrega</td>
            <td> $hora</td>
            <td> $rua . ', ' . $numero . ', ' . $bairro . ',' . $cidade</td>
            <td> $valorPedido</td>
            <td>

                <a href='../pedido/update?id= $idPedido'>

                    <button class='btn btn-outline-success'>
                        <i class='bi bi-pencil'></i> <span>Editar Pedido</span>
                    </button>
                </a>
                <a href='../pedido/delete?id= $idPedido'>
                    <button class='btn btn-outline-secondary'>
                        <i class='bi    bi-trash'></i> <span>Cancelar</span>
                    </button>
                </a>
            </td>
        </tr>");
        }

        ?>


    </tbody>
</table>