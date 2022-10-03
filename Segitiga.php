<?php
    require_once 'Rumus.php';
    class Segitiga extends rumus{
        public $alas = 20, $tinggi = 10;
        public function NamaBidang(){
            echo 'Segitiga';
        }

        public function luasBidang(){
            return $Luas = 0.5 * $this->alas * $this->tinggi;
        }

        public function kelilingBidang(){
            $sisi_a = 20; 
            $sisi_b = 20;
            $sisi_c = 20; 

            return $Keliling = $sisi_a + $sisi_b + $sisi_c;
        }
    }
