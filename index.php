<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
echo $bessie;

// store the output in a variable
$besson = new Cow('Hello, Farm!');
$besson->setEyes ('o0');
$besson->setTongue ('U');
echo $besson;