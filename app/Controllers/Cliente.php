<?php

namespace App\Controllers;

use Core\ConfigView;

class Cliente
{
    private  $idLogin, $id,$rua,$bairro,$numero;
    private object $clienteDao;
    private  array $datas;
    private string $pathView = "\Cliente";


    public function __construct()
    {
        $this->clienteDao = new \App\Helpers\ClienteDao();
        $this->idLogin = $_SESSION["idLogin"];
        $this->id = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['idCliente'];
        $this->rua = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['rua'];
        $this->bairro = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['bairro'];

        $this->numero = $this->clienteDao->selectByIdLogin($this->idLogin)[0]['numero'];




    }
    public function index()
    {



        $dashboard = new ConfigView($this->pathView . "\Dashboard");
        $dashboard->renderizar();
    }
    public function perfil()
    {

        $this->datas["informations"] = $this->clienteDao->selectById($this->id);

        $perfil = new ConfigView($this->pathView . "\Perfil", $this->datas);
        $perfil->renderizar();
    }
    public function meusPedidos()
    {




        $this->datas["request"] = $this->clienteDao->myRequests($this->id);


        $pedidos = new ConfigView($this->pathView . "\Pedidos", $this->datas);
        $pedidos->renderizar();
    }
    public function atualizarPerfil()
    {

        $this->datas["informations"] = $this->clienteDao->selectById($this->id);

        $formUpdate = new ConfigView($this->pathView . "\EditarPerfil", $this->datas);
        $formUpdate->renderizar();
    }
    public function update()
    {
        $this->clienteDao->update();


        header('Location:perfil');
    }

    public function minhascompras()
    {
        $teste = new ConfigView($this->pathView . "\minhascompras");
        $teste->renderizar();
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAddress()
    {
        $address = $this->rua.", ".$this->numero.", ".$this->bairro;
        return $address;
    }
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Ilha das Rabanadas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS;?>/form/forms.css">
    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


</head>
<style>
    h1 {
        text-align: center;
    }
</style>

<body>
    <div class="container-fluid " id="header">
        <header
            class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">


            <a href="../cliente/perfil " class="nav  col-md-auto mb-2 justify-content-center mb-md-0" id="return">

                <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="hover" colors="primary:#121331"
                    state="hover-2" style="width:50px;height:50px">
                </lord-icon>
            </a>

            <div class="col-md-3 text-center m-auto">
                <img width="60%" src="/public/imgs/img/logo-dashboards.webp" alt="">
            </div>
        </header>
    </div>
<br>
<br>jus
<div class="container ">
        <h1>Cadastrado com sucesso</h1>
        <div id="button-submit" class="d-flex justify-content-center"><input id="finalizar" class="btn" type="submit"
                value="Efetuar Login"></div>
    </div>

    </form>
    </div>

    </main>

    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha484-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    <script src="<?php echo JS; ?>/login/viaCep.js">
    </script>
</body>

</html>
