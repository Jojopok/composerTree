<?php 
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Wilder!');
$bessie->SetPoop('@@@');
$output = $bessie->say();
echo $output;

