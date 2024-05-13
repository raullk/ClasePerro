<?php
class Perro{
    // Propiedades
    private string $raza = 'sin raza';
    private int $peso = 0;
    private string $color ='sin color';
    private string $nombre = 'sin nombre';

    // metodos
    public function getPropiedades():string{
        return "$this->raza,$this->peso,$this->color,$this->nombre";
    }
}