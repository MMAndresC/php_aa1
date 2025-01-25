<?php
require './models/ForForeachClass.php';
require './utils/utils.php';
include './partials/header.html';

$max = $_POST['max'] ?? 10;

$instance = new ForForeachClass($max);

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
                        <label for="max">Número máximo
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
include './partials/footer.html';
?>



