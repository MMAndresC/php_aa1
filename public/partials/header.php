<?php
    require_once __DIR__ . '/../../utils/utils.php';
    $globalPath = getBaseURL();
    echo $globalPath;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <header>
        <a href=<?php echo $globalPath . "/ifElse.php" ?> >IF-ELSEIF-ELSE</a>
        <a href=<?php echo $globalPath . "/switch.php" ?> >SWITCH</a>
        <a href=<?php echo $globalPath . "/while.php" ?> >WHILE/DO-WHILE</a>
        <a href=<?php echo $globalPath . "/forForeach.php" ?> >FOR/FOREACH</a>
        <a href=<?php echo $globalPath . "/match.php" ?> >MATCH</a>
    </header>

