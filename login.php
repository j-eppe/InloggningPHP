<?php
if ($_POST["name"] === "jesblo") {
    if ($_POST["password"] === "snögubbe") {
        echo "Inloggning avklarad!";
    } else {
        echo "Inloggning misslyckad!";
    }
} else {
    echo "Inloggning misslyckad";
}
