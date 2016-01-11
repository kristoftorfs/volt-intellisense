<?php

namespace VoltIntellisense;

class Generator {
    private $code;
    public function __construct() {
        $class = new \ReflectionClass('\Phalcon\Tag');
        $methods = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
        $code = file_get_contents(__DIR__ . '/Generator.tpl');

        // Functions
        $skip = [
            'getEscaper', 'renderAttributes', 'setDI', 'getDI', 'getUrlService', 'getEscaperService',
            'setAutoescape', 'setDefault', 'setDefaults', 'displayTo', 'hasValue', 'getValue', 'resetInput'
        ];
        $functions = [];
        foreach($methods as $method) {
            if (in_array($method->getName(), $skip)) continue;
            $name = lcfirst(\Phalcon\Text::uncamelize($method->getName()));
            $callable = sprintf('Phalcon\\Tag::%s', $method->getName());
            $functions[] = sprintf("new Twig_SimpleFunction('%s', '%s')", $name, $callable);
        }
        $functions = implode(",\n", $functions);

        // Create PHP code
        $this->code = str_replace('%functions%', $functions, $code);
    }

    public function getCode() {
        return $this->code;
    }
}