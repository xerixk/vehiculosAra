<?php
    class Coche  extends vehiculo{
        protected int $numPuertas;
        public function __construct(string $marca, string $color, int $kilometros,int $numPuertas){
            parent::__construct( $marca,  $color, $kilometros);
            $this-> numPuertas=$numPuertas;
        }

        //Getter
        /*
        public function getNumPuertas():int{
            return $this->numPuertas;
        }
        //Setter
        public function setNumPuertas(int $numPuertas):void{
            $this->numPuertas=$numPuertas;
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