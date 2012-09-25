<?php

function zmAutoLoad($pClassName)
{
    require_once __DIR__ . "/../../src/class/" . strtolower($pClassName) . ".class.php";
}

spl_autoload_register("zmAutoLoad");