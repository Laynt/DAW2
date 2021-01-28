<?php
function test() {
    $foo = "variable local";

    echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo en el ámbito global: ' . $GLOBALS["foo"] . "<br>";
    
    echo '$foo en el ámbito simple: ' . $foo . "<br>";
}

$foo = "Contenido de ejemplo";
test();
