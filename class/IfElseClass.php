<?php

class IfElseClass
{

    private int $num1;
    private int $num2;
    private int $num3;
    private string $color1;
    private string $color2;

    public function __construct(string $color1, string $color2, int $num1, int $num2, int $num3) {
        $this->color1 = $color1;
        $this->color2 = $color2;
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
    }

    public function getDescription(): string
    {
        return
            "Descripción\n" .
            "La estructura de control <strong>if</strong> analiza si una expresión se cumple o no, si se cumple entra en el bloque de comandos del if\n" .
            "Puede ir acompañada con un <strong>else</strong> que agrupa los comandos que se ejecutaran si la expresión no se cumple\n" .
            "Despues del primer <strong>if</strong> se puede seguir analizando otras condiciones con <strong>elseif</strong>\n" .
            "Una vez que cumpla una condicion ejecutara el bloque de comandos e ignorara el resto de sentencias <strong>elseif</strong> o <strong>else</strong>"
        ;
    }

    public function getStructure(): string {
        return
            "La estructura sera: \n" .
            "if(condicion) { \n" .
            "  ...comandos \n" .
            "} \n" .
            "elseif (condicion) { \n" .
            "  ...comandos \n" .
            "} \n" .
            "...(Todos los elseif necesarios)...\n" .
            "else {\n" .
            "  ...comandos \n" .
            "}\n"
        ;
    }

    public function getAlternativeStructure(): string {
        return
            "Sintaxis alternativa:\n" .
            "if(condicion): \n" .
            "  ...comandos \n" .
            "elseif (condicion): \n" .
            "  ...comandos \n" .
            "...(Todos los elseif necesarios)...\n" .
            "else: \n" .
            "  ...comandos \n" .
            "endif;\n"
        ;
    }

    public function getResultNumbers(): string {
        if($this->num1 >$this->num2):
            return "Número 1 es mayor que Número 2";
        elseif ($this->num1 > $this->num3):
            return "Número 1 es mayor que Número 3";
        else:
            return "Número 1 es menor o igual que Número 2 y Número 3";
        endif;
    }

    public function getResultColors(): string {
        if(strtoupper($this->color1) == strtoupper($this->color2)):
            return "Color 1 es igual a Color 2";
        else:
            return "No son colores iguales";
        endif;
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

    public function getColor1(): string
    {
        return $this->color1;
    }

    public function getColor2(): string
    {
        return $this->color2;
    }

}