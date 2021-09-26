<?php
require_once "../Models/UsuarioModel.php";
session_start();

if (isset($_REQUEST['action'])) {
    $u = new UsuarioController();

    if ($_REQUEST['action'] == 'cadastrar') {
        $u->cadastrar();
    } elseif ($_REQUEST['action'] == 'list') {
        $u->list();
    } elseif ($_REQUEST['action'] == 'atualizar') {
        $u->atualizar();
    }
}

class UsuarioController
{
    public function cadastrar()
    {
        # code...
    }

    public function list()
    {
        # code...
    }

    public function atualizar()
    {
        # code...
    }
}
