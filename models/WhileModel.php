<?php

class WhileModel
{
    private int $num1;
    private int $num2;


    public function __construct(string $num1, string $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function getDescription(): string
    {
        return
            "Descripción\n"
            . "La estructura de control <strong>while</strong> y <strong>do-while</strong> ejecutan un bloque de código mientras se cumpla la condición\n"
            . "Las diferencia entre <strong>while</strong> y <strong>do-while</strong> es el número de veces que se ejecuta como mínimo\n"
            . "<strong>While</strong> evalúa la expresión al principio y si no se cumple no se ejecutará\n"
            . "<strong>Do-while</strong> ejecutá el bloque de código y al final evalúa, por lo que como mínimo se cumple una vez\n"
            ;
    }

    public function getStructureWhile(): string {
        return
            "La estructura del WHILE sera: \n" .
            "while(expresión) { \n" .
                "bloque de instrucciones\n" .
            "}\n"
            ;
    }

    public function getAlternativeStructureWhile(): string {
        return
            "Sintaxis alternativa del WHILE:\n" .
            "while(expresión): \n" .
                "bloque de instrucciones\n" .
            "endwhile;\n"
            ;
    }

    public function getStructureDoWhile(): string {
        return
            "La estructura del DO-WHILE sera: \n" .
            "do{ \n" .
            "bloque de instrucciones\n" .
            "}while(expresión);\n"
            ;
    }

    public function getResultWhile(): string {
        $response = "No cumple la condición y no ha entrado al bucle";
        while($this->num1 > $this->num2) {
            $response = "Se cumple la condición y ha entrado al bucle";
            $this->num1--;
        }
        return $response;
    }

    public function getResultDoWhile(): string {
        $response = "No cumple la condición pero siempre entrara al bucle";
        do{
            $response = "Se cumple la condición pero siempre entrara al bucle";
            $this->num1--;
        }while($this->num1 > $this->num2);
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
}