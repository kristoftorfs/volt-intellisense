<?php

namespace VoltIntellinse;
use \Twig_Extension, \Twig_SimpleFunction;

class Intellisense extends Twig_Extension {
public function getName() { return 'Volt'; }
public function getFunctions() { return [
%functions%
]; }
}