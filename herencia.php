<?php
class Transporte {
    protected int $ruedas;
    protected int $capacidad;
    public function __construct(int $ruedas, int $capacidad)
    {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }
    public function getInfo() : int {
        return "el transporte tiene" . $this ->ruedas . "ruedas y una capacidad de " . $this->capacidad . "personas";   
    }
    
    public function getRuedas() : int {
        return $this->ruedas;
    }
}


class Bicicleta extends Transporte {
    public function getInfo( ) : string {
         return "el transporte tiene " . $this->ruedas . "ruedas y uba capacidad de " . $this->capacidad . "personas y no gasta gasolina";
    }
}

class Automovil extends Transporte {
    protected string $transmision;
    public function __construct( int $ruedas, int $capacidad, string $transmision)
    {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
        $this->transmision = $transmision;
    }

    public function getTransmision() : string {
        return $this->transmision;
    }

}
$bicicleta = new Bicicleta(2,1);

echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();
echo "<br>";

$auto = new Automovil(4, 4, 'manual');
echo $auto->getInfo();
echo $auto->getTransmision();