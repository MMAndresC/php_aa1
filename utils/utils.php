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

function getBaseURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $basePath = dirname($_SERVER['SCRIPT_NAME']);
    return "$protocol://$host$basePath";
}
