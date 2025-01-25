<?php
require './models/MatchClass.php';
require './utils/utils.php';
include './partials/header.html';

$fruit1 = $_POST['fruit1'] ?? "Plátano";
$fruit2 = $_POST['fruit2'] ?? "Cereza";
$fruit3 = $_POST['fruit3'] ?? "Pera";

$instance = new MatchClass($fruit1, $fruit2, $fruit3);

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
        <h2>Ejemplo</h2>

        <div>
            <div>
                <div>
                    <p>var_dump(match(<?php echo $instance->getFruit1() ?> )) {</p>
                    <p><?php echo $instance->getFruit2() ?> => Es igual a la fruta 2</p>
                    <p><?php echo $instance->getFruit3() ?> => Es igual a la fruta 3</p>
                    <p>default => No es ninguna de las opciones</p>
                    <p>};</p>
                </div>
            </div>
            <div>
                <h4>Cambiar frutas del ejemplo</h4>
                <form action="match.php" method="post">
                    <div>
                        <label for="fruit1">Fruta 1
                            <input type="text" name="fruit1" id="fruit1" value="<?php echo $instance->getFruit1() ?>">
                    </div>
                    <div>
                        <label for="fruit2">Fruta 2
                            <input type="text" name="fruit2" id="fruit2" value="<?php echo $instance->getFruit2() ?>">
                    </div>
                    <div>
                        <label for="fruit3">Fruta 3
                            <input type="text" name="fruit3" id="fruit3" value="<?php echo $instance->getFruit3() ?>">
                    </div>
                    <div>
                        <input type="submit" value="Cambiar"/>
                    </div>
                </form>
            </div>
            <div>
                <h4>Resultado: <?php var_dump($instance->getResultFruits())?></h4>
            </div>
        </div>

    </div>


</main>

<?php
include './partials/footer.html';
?>


