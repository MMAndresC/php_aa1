<?php

class SwitchClass
{
    private int $num1;
    private int $num2;
    private int $num3;

    private string $fruit1;
    private string $fruit2;
    private string $fruit3;

    public function __construct(string $fruit1, string $fruit2, string $fruit3, int $num1, int $num2, int $num3) {
        $this->fruit1 = $fruit1;
        $this->fruit2 = $fruit2;
        $this->fruit3 = $fruit3;
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
    }

    public function getDescription(): string
    {
        return
            "Descripción\n"
            . "La estructura de control <strong>switch</strong> es equivalente a varios <strong>if</strong> anidados\n"
            . "Busca la expresión que cumple y a partir de ahí ejecuta todas las líneas del <strong>switch</strong> hasta encontrar un <strong>break</strong>\n"
            . "La sentencia <strong>default</strong> al final es equivalente al <strong>else</strong>, entrara unicamente si no cumple ninguno de los <strong>case</strong> \n"
            . "Se pueden agrupar varios <strong>case</strong> en los que se quiere ejecutar las mismas sentencias de código \n"
        ;
    }

    public function getStructure(): string {
        return
            "La estructura sera: \n" .
            "switch(expresión) { \n" .
            "case opción 1: \n" .
            "  ...comandos \n" .
            "break; \n" .
            "case opción 2: \n" .
            "  ...comandos \n" .
            "break; \n" .
            "case opción 3: \n" .
            "case opción 4: \n" .
            "  ...comandos \n" .
            "break; \n" .
            "...(Todos los case necesarios)...\n" .
            "default: {\n" .
            "  ...comandos \n" .
            "break; \n" .
            "}\n"
            ;
    }

    public function getAlternativeStructure(): string {
        return
            "Sintaxis alternativa:\n" .
            "switch(expresión): \n" .
            "case opción 1: \n" .
            "  ...comandos \n" .
            "break; \n" .
            "case opción 2: \n" .
            "  ...comandos \n" .
            "break; \n" .
            "case opción 3: \n" .
            "case opción 4: \n" .
            "  ...comandos \n" .
            "break; \n" .
            "...(Todos los case necesarios)...\n" .
            "default: {\n" .
            "  ...comandos \n" .
            "break; \n" .
            "endswitch;\n"
            ;
    }

    public function getResultNumbers(): string {
        $response = "";
        switch($this->num1) {
            case $this->num2:
                $response = "El número es igual al número 2 de valor " . $this->num2;
                break;
            case $this->num3:
                $response = "El número es igual al número 3 de valor " . $this->num3;
                break;
            default:
                $response = "El número no es igual a ninguno de los otros números";
        }
        return $response;
    }

    public function getResultFruits(): string {
        $response = "";
        switch($this->fruit1) {
            case $this->fruit2:
            case $this->fruit3:
                $response = "Es una de las dos frutas";
                break;
            default:
                $response = "No es ninguna de las dos frutas";
        }
        return $response;
    }

    //Getters
    public function getNum1(): int
    {
        return $this->num1;
    }

    public function getNum2(): int
    {
        return $this->num2;
    }

    public function getNum3(): int
    {
        return $this->num3;
    }

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