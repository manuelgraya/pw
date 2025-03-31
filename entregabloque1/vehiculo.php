<?php
// vehiculo.php

class Vehiculo {

    private $color;
    private $peso;

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
    
    public function getPeso(): int {
        return $this->peso;
    }
    public function getColor(): string {
        return $this->color;
    }

    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona;
    }
}

class Dos_ruedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }
    public function getCilindrada(): int {
        return $this->cilindrada;
    }
}

class Cuatro_ruedas extends Vehiculo {
    private $numPuertas;

    public function __construct($color, $peso, $numPuertas) {
        parent::__construct($color, $peso);
        $this->numPuertas = $numPuertas;
    }
    public function getnumPuertas(): int {
        return $this->numPuertas;
    }
}

class Coche extends Cuatro_ruedas {
    private $numCadenasNieve;
    private const NUM_CADENAS_NIEVE_MAX = 4; // Número máximo de cadenas de nieve
    private const NUM_CADENAS_NIEVE_MIN = 0; // Número mínimo de cadenas de nieve

    public function __construct($color, $peso, $numPuertas, $numCadenasNieve) {
        parent::__construct($color, $peso, $numPuertas);
        if ($numCadenasNieve > 0) {
            $this->numCadenasNieve = $numCadenasNieve;
        } else {
            $this->numCadenasNieve = 0;
        }
    }
    public function getnumCadenasNieve(): int {
        if ($this->numCadenasNieve < 0) {
            return 0;
        } elseif ($this->numCadenasNieve > self::NUM_CADENAS_NIEVE_MAX) {
            return $this->numCadenasNieve;
        } else {
            return $this->numCadenasNieve;
        }
    }
    public function añadir_cadena($cantidad_cadenas) {
        $suma = $this->numCadenasNieve + $cantidad_cadenas;
        if ($suma >= self::NUM_CADENAS_NIEVE_MAX) {
            $this->numCadenasNieve = self::NUM_CADENAS_NIEVE_MAX;
        } else {
            $this->numCadenasNieve += $cantidad_cadenas;
        }
    }
    public function quitar_cadena($cantidad_cadenas) {
        $resta = $this->numCadenasNieve - $cantidad_cadenas;
        if ($resta <= self::NUM_CADENAS_NIEVE_MIN) {
            $this->numCadenasNieve = self::NUM_CADENAS_NIEVE_MIN;
        } else {
            $this->numCadenasNieve -= $cantidad_cadenas;
        }
    }
    
}

class Camion extends Cuatro_ruedas {
    private $longitud;

    public function __construct($color, $peso, $numPuertas, $longitud) {
        parent::__construct($color, $peso, $numPuertas);
        $this->longitud = $longitud;
    }

    public function getLongitud(): int {
        return $this->longitud;
    }
}