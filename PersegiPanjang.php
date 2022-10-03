<?php
    require_once 'Rumus.php';
    class PersegiPanjang extends rumus{
        public $Panjang = 13, $Lebar = 6;
        public function NamaBidang(){
            echo 'Persegi Panjang';
        }

        public function luasBidang(){
            return $Luas = $this->Panjang * $this->Lebar;
        }

        public function kelilingBidang(){
            return $Keliling = 2 * ($this->Panjang + $this->Lebar);
        }
    }
