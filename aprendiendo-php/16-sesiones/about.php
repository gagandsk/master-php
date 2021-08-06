<?php
//Hay que hacer un session_start(); siempre que vayamos a usar una variable $_SESSION;
session_start();

echo $_SESSION['variable_persistente']."<br/>";