<?php
if ($_POST["name"] === "jesblo") {
    if ($_POST["password"] === "balle") {
        echo "Inloggning avklarad!";
    } else {
        echo "Inloggning misslyckad!";
    }
} else {
    echo "Inloggning misslyckad";
}
