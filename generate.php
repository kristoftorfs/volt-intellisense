<?php

namespace VoltIntellisense;
require_once(__DIR__ . '/vendor/autoload.php');

use PhpParser\Error;
use PhpParser\ParserFactory;

// Beautify PHP code
$parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
try {
    $statements = $parser->parse((new Generator())->getCode());
    $beautified = (new Beautifier())->prettyPrintFile($statements);
    file_put_contents(__DIR__ . '/VoltIntellisense.php', $beautified);
    echo "\n", 'Generation complete', "\n";
    echo '-------------------', "\n", "\n";
    echo $beautified, "\n";
} catch (Error $e) {
    echo 'Parse error: ', $e->getMessage() . "\n";
}