<?php

require_once("config.php");

$user = new Usuario();

$user->loadById(4);

echo($user);