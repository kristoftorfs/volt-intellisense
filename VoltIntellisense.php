<?php

class VoltIntellisense extends Twig_Extension {
    public function getName() {
        return 'Volt';
    }

    public function getFunctions() {
        return [
            new Twig_SimpleFunction('link_to', 'Phalcon\Tag::linkTo')
        ];
    }

}