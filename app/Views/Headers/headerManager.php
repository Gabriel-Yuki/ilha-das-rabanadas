<?php
if (!isset($_SESSION['idLogin'])) {
    include('./app/Views/Headers/headerPadrao.php');
} else {
    if ($_SESSION['idLogin'] == 1) {
        //sem sessao
        include('./app/Views/Headers/headerAdm.php');
    } else if ($_SESSION["idLogin"] > 1) {
        //clientes
        include('./app/Views/Headers/headerCliente.php');
    }
}
