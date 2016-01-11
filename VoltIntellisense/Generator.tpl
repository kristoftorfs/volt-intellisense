<?php

class VoltIntellisense extends Twig_Extension {
public function getName() { return 'Volt'; }
public function getFunctions() { return [
%functions%
]; }
}