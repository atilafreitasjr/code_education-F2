<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author atila
 */
class Cliente {

    protected $cod;
    protected $nome;
    protected $email;
    protected $cpf;
    protected $login;
    protected $senha;

    function getCod() {
        return $this->cod;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function __construct($cliente = FALSE) {
        if ($cliente) {
            $this->setar_cliente($cliente);
        }
    }

    function show_detalhe() {
         ?>
        <table border = "1">
        <thead>
        <tr>
        <th>Email</th>
        <th>CPF</th>
        <th>Login</th>
        <th>Senha</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $this->getEmail(); ?></td>
            <td><?php echo $this->getCpf(); ?></td>
            <td><?php echo $this->getLogin(); ?></td>
            <td><?php echo $this->getSenha(); ?></td>
        </tr>
        </tbody>
        </table>
    <?php

    }

    function setar_cliente($cliente) {
        $this->setCod($cliente['cod']);
        $this->setNome($cliente['nome']);
        $this->setEmail($cliente['email']);
        $this->setCpf($cliente['cpf']);
        $this->setLogin($cliente['login']);
        $this->setSenha($cliente['senha']);
    }

}
