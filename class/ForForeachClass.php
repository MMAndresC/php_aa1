<?php

class ForForeachClass
{
    private int $max;


    public function __construct(int $max) {
        $this->max = $max;
    }

    public function getDescription(): string
    {
        return
            "Descripción\n"
            . "La estructura de control <strong>for</strong> se repetirá mientras la condición se cumpla mientras va aumentando el indice en cada iteración\n"
            . "El <strong>forEach</strong> recorre todos los elementos de un <strong>array</strong> o un <strong>objeto</strong>, solo se puede utilizar en estos dos tipos de variables\n"
            ;
    }

    public function getStructureFor(): string {
        return
            "La estructura del FOR sera: \n" .
            "for(inicializar indice; expresión; incrementar/decrementar indice){ \n" .
            "bloque de instrucciones\n" .
            "}\n"
            ;
    }

    public function getAlternativeStructureFor(): string {
        return
            "Sintaxis alternativa del FOR:\n" .
            "for(inicializar indice; expresión; incrementar/decrementar indice): \n" .
            "bloque de instrucciones\n" .
            "endfor;\n"
            ;
    }

    public function getStructureForEach(): string {
        return
            "La estructura del FOREACH sera: \n" .
            "foreach(array as (valor/clave => valor))\n" .
            "bloque de instrucciones\n" .
            "};\n"
            ;
    }

    public function getResultFor() {
        for($i=0; $i <= $this->max; $i++) {
           echo "<p>Indice = " . $i . "</p>";
        }
    }

    public function getResultForEach() {
        $arr = ["Invierno", "Primavera", "Verano", "Otoño"];
        echo "<p>";
        print_r($arr);
        echo "</p>";
        foreach ($arr as $key => $value) {
            echo "<p>" . $key . "-->" . $value . "</p>";
      }
    }

    //Getter
    public function getMax(): int
    {
        return $this->max;
    }
}