<?php

namespace VoltIntellisense;

use PhpParser\Node\Expr;
use PhpParser\PrettyPrinter\Standard;

class Beautifier extends Standard {
    public function __construct(array $options = []) {
        parent::__construct($options);
        $defaultOptions = ['shortArraySyntax' => true];
        $this->options = $options + $defaultOptions;
    }

    protected function pCommaSeparatedNewLine(array $nodes) {
        return "\n    " . $this->pImplode($nodes, ", \n    ") . "\n";
    }

    public function pExpr_Array(Expr\Array_ $node) {
        if ($this->options['shortArraySyntax']) {
            return '[' . $this->pCommaSeparatedNewLine($node->items) . ']';
        } else {
            return 'array(' . $this->pCommaSeparatedNewLine($node->items) . ')';
        }
    }

}