<?php
    require_once __DIR__ . '/../models/ForForeachModel.php';
    require_once __DIR__ . '/../utils/utils.php';
    include_once __DIR__ . '/../public/partials/header.php';

    $max = $_POST['max'] ?? 10;

    $instance = new ForForeachModel($max);

?>
<main>
    <div>
        <?php
        drawLines($instance->getDescription());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getStructureFor());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getAlternativeStructureFor());
        ?>
    </div>
    <div>
        <?php
        drawLines($instance->getStructureForEach());
        ?>
    </div>
    <div>
        <h2>Ejemplos</h2>
        <div>
            <div>
                <h4>Cambiar máximo número</h4>
                <form action="forForeach.php" method="post">
                    <div>
                        <label for="max">Número máximo </label>
                        <input type="text" name="max" id="max" value="<?php echo $instance->getMax() ?>">
                    </div>
                    <div>
                        <input type="submit" value="Cambiar"/>
                    </div>
                </form>
            </div>
            <div>
                <p>for($i=0; $i <= <?php echo $instance->getMax() ?> ; $i++ ?>) { </p>
                <p> "Imprime $i" </p>
                <p>}</p>
            </div>
        </div>
        <div>
            <div>
                <h4>Resultado: <?php $instance->getResultFor()?></h4>
            </div>
        </div>

        <div>
            <div>
                <p>foreach($arr as $clave => $valor)</p>
                <p> "Imprime $clave --> $valor"</p>
                <p>}</p>
            </div>
            <div>
                <h4>Resultado: <?php $instance->getResultForEach();?></h4>
            </div>
        </div>
    </div>


</main>

<?php
include_once __DIR__ . '/../public/partials/footer.php';
?>



