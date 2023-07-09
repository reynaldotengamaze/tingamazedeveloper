<?php
class Cliente{
    private $idCliente;
    private $nome;
    private $rg;
    
public function Cliente(){
}
public function getidCliente(){
    return $this-> idCliente;
}
public function setidCliente($idCliente){
    $this->idCliente=$idCliente;
}
public function getnome(){
    return $this->nome;
}
public function setnome($nome){
     $this->nome=$nome;
}
public function getrg(){
    return $this->rg;
}
public function setrg($rg){
    $this->rg=$rg;
}
}
?>




