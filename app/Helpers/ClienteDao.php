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
    private function index()
    {
    }
    public function selectByIdLogin($idLogin)
    {
        $datas =  $this->clienteModel->selectByIdLogin($idLogin);
        return $datas;
    }
    public function update()
    {

        $this->id = $_SESSION["idCliente"];


        $this->name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lastName = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->zipCode = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->street = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->number = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->district = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->city = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->phoneNumber =  filter_input(INPUT_POST, 'numeroCelular', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->residentialNumber =  filter_input(INPUT_POST, 'numeroResidencial', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->clienteModel->update($this->id, $this->name, $this->lastName, $this->zipCode, $this->street, $this->number, $this->district, $this->city, $this->residentialNumber, $this->phoneNumber);
    }
    public function myRequests($id)
    {

        $datas = $this->clienteModel->myRequests($id);


        return $datas;
    }
}
