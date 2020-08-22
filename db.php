<?php
require "libs/rb.php";

session_start(); // Запоминает, что уже зарегестрирован

R::setup( 'mysql:host=localhost;dbname=Baza',
    'root', '' );
?>