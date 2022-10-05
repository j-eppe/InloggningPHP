<?php
if ($_POST["name"] === "jesblo") {
    if ($_POST["password"] === "snögubbe") {
        echo "Inloggning avklarad!";
        session_start();
        $_SESSION["name"] = $_POST["name"];
        header("Location: filuppladning.html");
        exit();
    } else {
        echo "Inloggning misslyckad!";
    }
} else {
    echo "Inloggning misslyckad";
}
