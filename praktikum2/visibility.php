<!--Visibility.php -->
<?php 
class Visibility {
    public $public;
    private $private;
    protected $protected;

    function tampilkanProperty(){
    echo "Ini diakses didalam kelas <br>";
    echo "Public : " . $this->public . '<br>';
    echo "Protected : " . $this->protected . '<br>';
    echo "Private : " . $this->Private . '<br>';
    }
}