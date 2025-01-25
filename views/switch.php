<?php
    require_once __DIR__ . '/../models/SwitchModel.php';
    require_once __DIR__ . '/../utils/utils.php';
    include_once __DIR__ . '/../public/partials/header.php';

    $num1 = $_POST['num1'] ?? 79;
    $num2 = $_POST['num2'] ?? 42;
    $num3 = $_POST['num3'] ?? 13;
    $fruit1 = $_POST['fruit1'] ?? "Plátano";
    $fruit2 = $_POST['fruit2'] ?? "Cereza";
    $fruit3 = $_POST['fruit3'] ?? "Pera";

    $instance = new SwitchModel($fruit1, $fruit2, $fruit3, $num1, $num2, $num3);

?>
<main>
    <div>
        <?php
        drawLines($instance->getDescription());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getStructure());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getAlternativeStructure());
        ?>
    </div>
    <div>
        <h2>Ejemplos</h2>
        <div>
            <div>
                <div>
                    <p>switch(<?php echo $instance->getNum1() ?>) {</p>
                    <p>case <?php echo $instance->getNum2() ?>:</p>
                    <p>echo El número es igual al número 2 de valor <?php echo $instance->getNum2() ?></p>
                    <p>break</p>
                    <p>case <?php echo $instance->getNum3() ?>:</p>
                    <p>echo El número es igual al número 3 de valor <?php echo $instance->getNum3() ?></p>
                    <p>break</p>
                    <p>default:</p>
                    <p>echo El número no es igual a ninguno de los otros números</p>
                </div>
            </div>

            <div>
                <h4>Cambiar números del ejemplo</h4>
                <form action="switch.php" method="post">
                    <div>
                        <label for="num1">Número 1</label>
                        <input type="text" name="num1" id="num1" value="<?php echo $instance->getNum1() ?>">
                    </div>
                    <div>
                        <label for="num2">Número 2</label>
                        <input type="text" name="num2" id="num2" value="<?php echo $instance->getNum2() ?>">
                    </div>
                    <div>
                        <label for="num3">Número 3</label>
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
                    <p>switch(<?php echo $instance->getFruit1() ?> ) {</p>
                    <p>case <?php echo $instance->getFruit2() ?>:</p>
                    <p>case <?php echo $instance->getFruit3() ?>:</p>
                    <p>echo Es una de las dos frutas</p>
                    <p>break</p>
                    <p>default:</p>
                    <p>echo No es ninguna de las dos frutas</p>
                    <p>}</p>
                </div>
            </div>
            <div>
                <h4>Cambiar frutas del ejemplo</h4>
                <form action="switch.php" method="post">
                    <div>
                        <label for="fruit1">Fruta 1</label>
                        <input type="text" name="fruit1" id="fruit1" value="<?php echo $instance->getFruit1() ?>">
                    </div>
                    <div>
                        <label for="fruit2">Fruta 2</label>
                        <input type="text" name="fruit2" id="fruit2" value="<?php echo $instance->getFruit2() ?>">
                    </div>
                    <div>
                        <label for="fruit3">Fruta 3</label>
                        <input type="text" name="fruit3" id="fruit3" value="<?php echo $instance->getFruit3() ?>">
                    </div>
                    <div>
                        <input type="submit" value="Cambiar"/>
                    </div>
                </form>
            </div>
            <div>
                <h4>Resultado: <?php echo $instance->getResultFruits()?></h4>
            </div>
        </div>

    </div>


</main>

<?php
    include_once __DIR__ . '/../public/partials/footer.php';
?>

