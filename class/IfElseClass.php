<?php

class IfElseClass
{

    public int $num1;
    public int $num2;
    public int $num3;
    public string $color1;
    public string $color2;
    public string $color3;

    public function __construct(string $color1, string $color2, string $color3, int $num1, int $num2, int $num3) {
        $this->color1 = $color1;
        $this->color2 = $color2;
        $this->color3 = $color3;
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
    }

    public function getDescription(): string
    {
        return
            "La estructura de control <strong>if</strong> analiza si una condicion se cumple o no, si se cumple entra en el bloque de comandos del if\n" .
            "Puede ir acompañada con un <strong>else</strong> que agrupa los comandos que se ejecutaran si la condicion no se cumple\n" .
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

    public function getColor3(): string
    {
        return $this->color3;
    }

}