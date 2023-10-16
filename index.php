<?php 
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Wilder!');
$output = $bessie->say();
echo $output;

