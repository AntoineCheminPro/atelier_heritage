<?php 

final class Vache extends Animal {

    public bool $herbivore = true;
    public function manger(){
        echo "broute de l'herbe";
    }
    public function __construct(string $name) {
        parent::__construct($name);
    }
}
?>