<?php
// Clase base Vehiculo
class Vehiculo {
    protected $color;
    protected $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function circula() {
        echo "El vehículo está en movimiento.<br>";
    }
    public function para() {
        echo "El vehículo está parado.<br>";
    }

    public function anadir_persona($peso_persona) {
        $this->peso += $peso_persona;
    }
}

// Clase intermedia Cuatro_ruedas
class Cuatro_ruedas extends Vehiculo {
    protected $numero_puertas;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    public function repintar($color) {
        $this->color = $color;
    }
}

// Clase intermedia Dos_ruedas
class Dos_ruedas extends Vehiculo {
    protected $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros) {
        $this->peso += $litros;
    }
}

// Clase Coche
class Coche extends Cuatro_ruedas {
    private $numero_cadenas_nieve;

    public function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    public function anadir_cadenas_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    public function quitar_cadenas_nieve($num) {
        $this->numero_cadenas_nieve -= max(0, $num);
    }
}

// Clase Camion
class Camion extends Cuatro_ruedas {
    private $longitud;

    public function __construct($color, $peso, $numero_puertas, $longitud) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->longitud = $longitud;
    }

    public function anadir_remolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }
}
?>