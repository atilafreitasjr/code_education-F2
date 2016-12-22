<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once 'Cliente.php';

/**
 * ARRAY DE CLIENTES
 */
$clientes[1] = array(
    'cod' => '1',
    'nome' => 'Cliente 1',
    'email' => 'cliente1@a.com',
    'cpf' => '000.000.001',
    'login' => 'cliente1',
    'senha' => '0001');
$clientes[2] = array(
    'cod' => '2',
    'nome' => 'Cliente 2',
    'email' => 'cliente2@a.com',
    'cpf' => '000.000.002',
    'login' => 'cliente2',
    'senha' => '0002');
$clientes[3] = array(
    'cod' => '3',
    'nome' => 'Cliente 3',
    'email' => 'cliente3@a.com',
    'cpf' => '000.000.003',
    'login' => 'cliente3',
    'senha' => '0003');
$clientes[4] = array(
    'cod' => '4',
    'nome' => 'Cliente 4',
    'email' => 'cliente4@a.com',
    'cpf' => '000.000.004',
    'login' => 'cliente4',
    'senha' => '0004');
$clientes[5] = array(
    'cod' => '5',
    'nome' => 'Cliente 5',
    'email' => 'cliente5@a.com',
    'cpf' => '000.000.005',
    'login' => 'cliente5',
    'senha' => '0005');
$clientes[6] = array(
    'cod' => '6',
    'nome' => 'Cliente 6',
    'email' => 'cliente6@a.com',
    'cpf' => '000.000.006',
    'login' => 'cliente6',
    'senha' => '0006');
$clientes[7] = array(
    'cod' => '7',
    'nome' => 'Cliente 7',
    'email' => 'cliente7@a.com',
    'cpf' => '000.000.007',
    'login' => 'cliente7',
    'senha' => '0007');
$clientes[8] = array(
    'cod' => '8',
    'nome' => 'Cliente 8',
    'email' => 'cliente8@a.com',
    'cpf' => '000.000.008',
    'login' => 'cliente8',
    'senha' => '0008');
$clientes[9] = array(
    'cod' => '9',
    'nome' => 'Cliente 9',
    'email' => 'cliente9@a.com',
    'cpf' => '000.000.009',
    'login' => 'cliente9',
    'senha' => '0009');
$clientes[10] = array(
    'cod' => '10',
    'nome' => 'Cliente 10',
    'email' => 'cliente10@a.com',
    'cpf' => '000.000.0010',
    'login' => 'cliente10',
    'senha' => '00010');

/**
 * Ordenar array
 */
if (isset($_GET['ordem']) || isset($_SESSION['ordem'])) {
    $_SESSION['ordem'] = 'asc';
    $btn_desc = 'hidden="on"';
    $btn_asc = '';
    krsort($clientes);
} else {
    if (isset($_SESSION['ordem'])) {
        unset($_SESSION['ordem']);
    }
    $btn_desc = '';
    $btn_asc = 'hidden="on"';
    ksort($clientes);
}

if (isset($_GET['cod'])) {
    $_SESSION['cod'] = $_GET['cod'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">        
        <link href="estilo/estiloTab.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="jquery/jquery-2.1.4.min.js"></script>
        <title>Lista Clientes</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>C&oacute;digo Cliente </th>
                    <th>Listagem de Cliente </th>
                    <th <?php echo $btn_desc; ?>><a href="index.php?ordem=desc">&and;</a></th>
                    <th <?php echo $btn_asc; ?>><a href="index.php">&or;</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($clientes as $index => $cliente) {
                    $cliente[$index] = new Cliente($clientes[$index]);
                    ?>
                    <tr>                
                        <td>
                            <?php echo $cliente[$index]->getCod(); ?>
                        </td>
                        <td>
                            <?php echo $cliente[$index]->getNome(); ?>
                        </td>
                        <td onclick="ver_detalhes('<?php echo $cliente[$index]->getCod(); ?>')" align=center>
                            <a href="#" id="detalhes-down_<?php echo $cliente[$index]->getCod(); ?>">⇲</a>
                            <a href="#" id="detalhes-up_<?php echo $cliente[$index]->getCod(); ?>" hidden="TRUE">⇱</a>
                        </td>
                    </tr>
                    <tr alt="Ver Detalhes..." id="detalhes_<?php echo $cliente[$index]->getCod(); ?>" hidden="TRUE">                
                        <td colspan="4">
                            <?php echo $cliente[$index]->show_detalhe(); ?>
                        </td>
                    </tr>
                <?php } ?>      
            </tbody>
        </table>
    </body>
    <script>
        function ver_detalhes(cod) {
            $('#detalhes_' + cod).toggle();
            $('#detalhes-down_' + cod).toggle();
            $('#detalhes-up_' + cod).toggle();
        }
    </script>
</html>
