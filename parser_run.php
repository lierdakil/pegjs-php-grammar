<?php
require('./parser.php');

$parser = new PhpPegJs\Parser;

echo $parser->parse("1+3.1415e-1");
