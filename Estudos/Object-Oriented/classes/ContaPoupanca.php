<?php

    class ContaPoupanca extends Conta{

        public function saque($quantia){
            if($this->saldo >= $quantia){
                $this->saldo -= $quantia;
                $this->quantia = $quantia;
            }
            else{
                $this->quantia = $quantia;
                return false;
            }
            return true;
        }
    }