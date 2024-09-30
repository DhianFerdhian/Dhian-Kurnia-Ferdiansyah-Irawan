<?php

class orang{
    // property
    public $nama;
    public $tgllahir;
    public $alamat;

    // construktor
    public function __construct()
    {
        $this->nama = "Anonim";
    }
    
    // method
    public function ucapsalam() {
        echo "<h3> Hallo, Perkenalkan nama saya " . $this->nama . "</h3";
    }

    //destructor
    public function __destruct()
    {
        echo "Ini adalah destructor dari " . $this->nama ."<br>";
    }
}

// 