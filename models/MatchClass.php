<?php

class MatchClass
{

    private string $fruit1;
    private string $fruit2;
    private string $fruit3;

    public function __construct(string $fruit1, string $fruit2, string $fruit3) {
        $this->fruit1 = $fruit1;
        $this->fruit2 = $fruit2;
        $this->fruit3 = $fruit3;
    }

    public function getDescription(): string
    {
        return
            "Descripción\n"
            . "La estructura de control <strong>match</strong> es equivalente a <strong>switch</strong> \n"
            . "A diferencia de switch, la comparación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil (==)\n"
        ;
    }

    public function getStructure(): string {
        return
            "La estructura sera: \n" .
            "valor devuelto = match(expresion){ \n" .
            "opción 1 => Es la opción 1 \n" .
            "opción 2 => Es la opción 2 \n" .
            "...(Todos los case necesarios)...\n" .
            "default => No es ninguna de las opciones \n" .
            "};\n"
            ;
    }


    public function getResultFruits(): string {
        return match ($this->fruit1) {
            $this->fruit2 => "Fruta 1 es igual a la fruta 2",
            $this->fruit3 => "Fruta 2 es igual a la fruta 3",
            default => "No es ninguna de las opciones"
        };
    }

    //Getters
    public function getFruit1(): string
    {
        return $this->fruit1;
    }

    public function getFruit2(): string
    {
        return $this->fruit2;
    }

    public function getFruit3(): string
    {
        return $this->fruit3;
    }
}