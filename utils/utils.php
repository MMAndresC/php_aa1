<?php
function drawLines(String $content): void
{
    $lines = preg_split('/\r\n|\r|\n/', $content);
    foreach ($lines as $index => $line) {
        if($index === 0) {
            echo "<h2>" . $line . "</h2>";
            echo "<div>";
        } else{
            echo "<p>" . $line . "</p>";
        }
    }
    echo "</div>";
}
