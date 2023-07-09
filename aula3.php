<?php

include_once 'aula2.php';

$cli = new Cliente();
$cli->setidCliente(1);
$cli->setnome("Reynaldo Tingamaze");
$cli->setrg(1122334050);

echo '<p> Codigo do cliente: '. $cli->getidCliente() . '<br/>';
echo '<p> Nome do cliente: '.$cli->getnome().'<br/>';
echo '<p> RG do cliente: '.$cli->getrg(). '</p>';
?>


