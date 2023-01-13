<?php

print_r($_GET);

if (isset($_GET['iteration'])) {
    echo "Toutes les variables existent, je peux continuer <br>";
    for ($i = 0; $i < $_GET['iteration']; $i++) {
        echo "Hello World ! <br>";
    }
}