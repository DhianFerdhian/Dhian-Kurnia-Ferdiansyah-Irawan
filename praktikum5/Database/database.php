<<<<<<< HEAD
<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "perpustakaan";
    private $koneksi = null;

    public function __construct()
    {
        $this->koneksi = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->databaseName
        );
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi()
    {
        return $this->koneksi;
    }
}
=======
<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "perpustakaan";
    private $koneksi = null;

    public function __construct()
    {
        $this->koneksi = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->databaseName
        );
    }

    public function __destruct()
    {
        $this->koneksi->close();
    }

    public function getKoneksi()
    {
        return $this->koneksi;
    }
}
>>>>>>> 3bdc20b930dfccccd74736da88fc61fe4cabdf7c
