<div class="card">
    <div class="card-img"><img class="card-img-top " src="<?php echo $imagem; ?>" alt="Title"></div>
    <div class="card-body ">
        <h5 class="card-title fw-bold"><?php echo $nomeProduto; ?></h5>
        <p class="card-text"><?php echo $descricao; ?></p>
        <p><?php echo $preco; ?></p>
    </div>
    <div class="card-footer d-flex align-items-center justify-content-center gap-2">
        <a id="edit" href="../adm/atualizarproduto?id=<?php echo $idProduto; ?>"><button class="btn btn-success">Editar</button></a>
        <button type="button" class="btn btn-outline-danger W" data-bs-toggle="modal" data-bs-target="#modal<?php echo $idProduto; ?>">
            Deletar
        </button>
    </div>
</div>
<div class="modal fade" id="modal<?php echo $idProduto; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza que quer deletar esse item?</p>
            </div>
            <div class="modal-footer">
                <form action='../produto/delete' method='POST'>
                    <input type='hidden' name='id' value='<?php echo $idProduto; ?>'>

                    <button name='deletar' type='submit' class='btn btn-outline-danger'>
                        Sim, quero deletar!
                    </button>
                </form>
                <button type='button' data-bs-dismiss='modal' class='btn btn-outline-primary'>
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>