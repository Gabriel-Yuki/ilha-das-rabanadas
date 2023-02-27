<?php

namespace App\Helpers;

class ClienteDao
{
    public string $name, $lastName, $zipCode, $street, $district, $city,  $number, $phoneNumber, $residentialNumber;
    public $id;
    private  object $clienteModel;
    public function __construct()
    {
        $this->clienteModel = new \App\Models\ClienteModel();
    }

    public function insert($idLogin)
    {

        $this->clienteModel->name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->lastName = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->zipCode = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->street = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->number = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->district = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->city = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->clienteModel->phoneNumber =  filter_input(INPUT_POST, 'numeroCelular', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->insert($idLogin);
    }
    public function selectByIdLogin($idLogin)
    {
        $datas =  $this->clienteModel->selectByIdLogin($idLogin);
        return $datas;
    }
    public function selectById($id)
    {
        $datas =  $this->clienteModel->selectById($id);
        return $datas;
    }
    public function update()
    {



        $this->clienteModel->idCliente = filter_input(INPUT_POST, 'idCliente', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->lastName = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->zipCode = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->street = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->number = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->district = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->city = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->clienteModel->phoneNumber =  filter_input(INPUT_POST, 'numeroCelular', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->update();
    }
    public function myRequests($id)
    {

        $datas = $this->clienteModel->myRequests($id);

        // verifica pedidos do user
        for ($i = 0; $i < sizeof($datas); $i++) {
            if ($datas[$i]["idCliente"] == $id) {
                $requests[] = $datas[$i];
            }
        }
        if (isset($requests)) {
            return $requests;
        }
    }
}
