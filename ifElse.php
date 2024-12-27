<?php
    require './class/IfElseClass.php';

    $num1 = 79;
    $num2 = 42;
    $num3 = 13;
    $color1 = "Amarillo";
    $color2 = "Azul";
    $color3 = "Verde";

    if(!empty($_POST)){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $color1 = $_POST['color1'];
        $color2 = $_POST['color2'];
        $color3 = $_POST['color3'];
    }
    $instance = new IfElseClass($color1, $color2, $color3, $num1, $num2,$num3)
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
        <h2>Ejemplos</h2>
        <h4>Cambiar valores de los ejemplos</h4>
        <div>
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
                    <label for="color3">Color 3
                        <input type="text" name="color3" id="color3" value="<?php echo $instance->getColor3() ?>">
                </div>
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
    </div>
</main>
