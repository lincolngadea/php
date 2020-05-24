<?php 

final class ContaPoupanga extends Conta{
    public function retirar($quantia){
        if($this->saldo >= $quantia){
            $this->saldo -= $quantia;
        }else{
            return false; //retirada não permitida
        }

        return true; //Retirada Permitida
    }
}