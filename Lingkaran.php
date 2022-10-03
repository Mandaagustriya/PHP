<?php
    require_once 'Rumus.php';
    class Lingkaran extends rumus{
        public $jari2 = 20;    
        public function NamaBidang(){
            echo 'Lingkaran';
        }

        public function luasBidang(){
            return $luasLingkaran = 3.14* $this->jari2 * $this->jari2;
        }

        public function kelilingBidang(){
           return $kelilingLingkaran = 2 * 3.14 * $this->jari2;
        }
    }
