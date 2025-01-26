<?php
    require_once __DIR__ . '/../models/WhileModel.php';
    require_once __DIR__ . '/../utils/utils.php';
    include_once __DIR__ . '/../public/partials/header.php';

    if (!isset($_COOKIE['php_aa1'])) {
        require_once __DIR__ . '/../controllers/AuthController.php';
        $authController = new \controllers\AuthController();
        $authController->logout();
        exit();
    }

    $num1 = $_POST['num1'] ?? 79;
    $num2 = $_POST['num2'] ?? 42;

    $instance = new WhileModel($num1, $num2);

?>
<main>
    <div>
        <?php
        drawLines($instance->getDescription());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getStructureWhile());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getAlternativeStructureWhile());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getStructureDoWhile());
        ?>
    </div>
    <div>
        <h2>Ejemplos</h2>
        <div>
            <h4>Cambiar números del ejemplo</h4>
            <form action="while.php" method="post">
                <div>
                    <label for="num1">Número 1</label>
                    <input type="text" name="num1" id="num1" value="<?php echo $instance->getNum1() ?>">
                </div>
                <div>
                    <label for="num2">Número 2</label>
                    <input type="text" name="num2" id="num2" value="<?php echo $instance->getNum2() ?>">
                </div>
                <div>
                    <input type="submit" value="Cambiar"/>
                </div>
            </form>
        </div>
        <div>
            <div>
                <div>
                    <p>while(<?php echo $instance->getNum1() ?> > <?php echo $instance->getNum2() ?>) { </p>
                    <p> "Se cumple la condición y ha entrado al bucle" </p>
                    <p>}</p>
                </div>
                <div>
                    <h4>Resultado: <?php echo $instance->getResultWhile()?></h4>
                </div>
            </div>
            <div>
                <div>
                    <p>do{</p>
                    <p> "Se cumple la condición, pero siempre entrará al bucle"</p>
                    <p>} while(<?php echo $instance->getNum1() ?> > <?php echo $instance->getNum2() ?>)</p>
                </div>
                <div>
                    <h4>Resultado: <?php echo $instance->getResultDoWhile()?></h4>
                </div>
            </div>
        </div>


    </div>


</main>

<?php
    include_once __DIR__ . '/../public/partials/footer.php';
?>


