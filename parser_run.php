<?php
require('./parser.php');

global $parser;
$parser = new PhpPegJs\Parser;
$parser->vars = array(
    'test' => 3.14,
);

function test($str, $expect) {
    global $parser;
    echo $str . ' => ' . $parser->parse($str) . ' ;; ' . $expect . "\n";
}

test('$test',3.14);
test('if(in($test,3,4,5),1,0)',0);
test('if(in($test,3.14,4,5),1,0)',1);
test('if(in($test,3+0.14,sqrt(4),5),1,0)',1);
test('if(in(2,3+0.14,sqrt(4),5),1,0)*sqrt(2)',sqrt(2));
test('if(in(3,3+0.14,sqrt(4),5),1,0)*sqrt(2)',0);
