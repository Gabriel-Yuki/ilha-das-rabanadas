<?php

namespace App\Controllers;

class Logout
{
    public function index()
    {

        unset($_SESSION['idLogin']);
        header("Location:../login/index");
    }
}
