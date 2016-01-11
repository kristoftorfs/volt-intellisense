<?php

namespace VoltIntellisense;

use PhpParser\PrettyPrinter\Standard;

class Beautifier extends Standard {
    protected function pCommaSeparated(array $nodes) {
        return parent::pCommaSeparated($nodes);
    }
}