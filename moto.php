<?php

class Moto extends vehiculo{
    protected int $cilindrada;
    public function __construct(string $marca, string $color, int $kilometros,int $cilindrada){
        parent::__construct( $marca,  $color,  $kilometros);
        $this-> cilindrada=$cilindrada;
    }

    //Getter
    /*
    public function getCilindrada():int{
        return $this->cilindrada;
    }
    //Setter
    public function setCilindrada(int $cilindrada):void{
        $this->cilindrada=$cilindrada;
    }*/

    public function __get($propiedad):mixed{
        if(property_exists($this,$propiedad)){
        $this->$propiedad;
        }else{
            return null;
        }
    }

    public function __set($propiedad,$valor):void{
        if(property_exists($this,$propiedad)){
        $this->$propiedad=$valor;
        }
    }
}
?>