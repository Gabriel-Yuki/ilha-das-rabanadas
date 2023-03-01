<?php

namespace App\Models;

class ClienteModel extends Conn
{

    public string $password, $name, $lastName, $phoneNumber, $zipCode, $street, $district, $number, $city;
    public $idCliente;
    private $conn;
    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function insert($idlogin)
    {


        $query = "INSERT INTO cliente (nomeCliente,sobrenome,numeroCliente,cep,rua,bairro,numero,cidade,idLogin) VALUES (?,?,?,?,?,?,?,?,?);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->name);
        $stmt->bindValue(2, $this->lastName);
        $stmt->bindValue(3, $this->phoneNumber);
        $stmt->bindValue(4, $this->zipCode);
        $stmt->bindValue(5, $this->street);
        $stmt->bindValue(6, $this->district);
        $stmt->bindValue(7, $this->number);
        $stmt->bindValue(8, $this->city);
        $stmt->bindValue(9, $idlogin);



        $stmt->execute();
    }
    public function update()
    {

        $query = "UPDATE cliente SET nomeCliente=?,sobrenome=?,numeroCliente=?,cep=?,rua=?,bairro=?,numero=?,cidade=? WHERE idCliente= ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->name);
        $stmt->bindValue(2, $this->lastName);
        $stmt->bindValue(3, $this->phoneNumber);
        $stmt->bindValue(4, $this->zipCode);
        $stmt->bindValue(5, $this->street);
        $stmt->bindValue(6, $this->district);
        $stmt->bindValue(7, $this->number);
        $stmt->bindValue(8, $this->city);
        $stmt->bindValue(9,  $this->idCliente);
        $stmt->execute();
    }
    public function selectByIdLogin($id)
    {
        $query = "SELECT * FROM cliente WHERE idLogin=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function selectById($id)
    {
        $query = "SELECT * FROM cliente WHERE idCliente=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function myRequests($id)
    {
        $query = "SELECT
        *
    FROM
        cliente c
    INNER JOIN
        pedido a
    ON a.idCliente = c.idCliente";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $informationRequest = $stmt->fetchAll();
        return $informationRequest;
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

