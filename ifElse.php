<?php
    require './class/IfElseClass.php';
    include './partials/header.html';

    $num1 = $_POST['num1'] ?? 79;
    $num2 = $_POST['num2'] ?? 42;
    $num3 = $_POST['num3'] ?? 13;
    $color1 = $_POST['color1'] ?? "Amarillo";
    $color2 = $_POST['color2'] ?? "Azul";

    $instance = new IfElseClass($color1, $color2, $num1, $num2, $num3)
?>
<main>
    <h2>Descripcion</h2>
    <div>
        <?php
        $lines = preg_split('/\r\n|\r|\n/', $instance->getDescription());
        foreach ($lines as $line) {
            echo "<p>" . $line . "</p>";
        }
        ?>
    </div>
    <div>
        <?php
        $lines = preg_split('/\r\n|\r|\n/', $instance->getStructure());
        foreach ($lines as $index => $line) {
            if($index === 0) {
                echo "<h4>" . $line . "</h4>";
                echo "<div>";
            } else{
                echo "<p>" . $line . "</p>";
            }
        }
        echo "</div>";
        ?>
    </div>
    <div>
        <?php
        $lines = preg_split('/\r\n|\r|\n/', $instance->getAlternativeStructure());
        foreach ($lines as $index => $line) {
            if($index === 0) {
                echo "<h4>" . $line . "</h4>";
                echo "<div>";
            } else{
                echo "<p>" . $line . "</p>";
            }
        }
        echo "</div>";
        ?>
    </div>
    <div>
        <h2>Ejemplos</h2>
        <div>
            <div>
                <div>
                    <p>if($num1 > $num2){</p>
                    <p>  echo "num1 es mayor que num2"</p>
                    <p>}elseif($num1 > $num3){</p>
                    <p>  echo "num1 es mayor que num3"</p>
                    <p>}else{</p>
                    <p>  echo "num1 es menor o igual que num2 y num3"</p>
                    <p>}</p>
                </div>
            </div>

            <div>
                <h4>Cambiar números del ejemplo</h4>
                <form action="ifElse.php" method="post">
                    <div>
                        <label for="num1">Número 1
                            <input type="text" name="num1" id="num1" value="<?php echo $instance->getNum1() ?>">
                    </div>
                    <div>
                        <label for="num2">Número 2
                            <input type="text" name="num2" id="num2" value="<?php echo $instance->getNum2() ?>">
                    </div>
                    <div>
                        <label for="num3">Número 3
                            <input type="text" name="num3" id="num3" value="<?php echo $instance->getNum3() ?>">
                    </div>
                    <div>
                        <input type="submit" value="Cambiar"/>
                    </div>
                </form>
            </div>
            <div>
                <h4>Resultado: <?php echo $instance->getResultNumbers()?></h4>
            </div>
        </div>

        <div>
            <div>
                <div>
                    <p>if(strtoupper($color1) == strtoupper($color2)){</p>
                    <p>  echo "color1 es igual a color2"</p>
                    <p>}else{</p>
                    <p>  echo "No son colores iguales"</p>
                    <p>}</p>
                </div>
            </div>
            <div>
                <h4>Cambiar colores del ejemplo</h4>
                <form action="ifElse.php" method="post">
                    <div>
                        <label for="color1">Color 1
                            <input type="text" name="color1" id="color1" value="<?php echo $instance->getColor1() ?>">
                    </div>
                    <div>
                        <label for="color2">Color 2
                            <input type="text" name="color2" id="color2" value="<?php echo $instance->getColor2() ?>">
                    </div>
                    <div>
                        <input type="submit" value="Cambiar"/>
                    </div>
                </form>
            </div>
            <div>
                <h4>Resultado: <?php echo $instance->getResultColors()?></h4>
            </div>
        </div>

    </div>


</main>

<?php
    include './partials/footer.html';
?>
