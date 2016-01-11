<?php

namespace VoltIntellinse;

use Twig_Extension, Twig_SimpleFunction;
class Intellisense extends Twig_Extension
{
    public function getName()
    {
        return 'Volt';
    }
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('link_to', 'Phalcon\\Tag::linkTo'), 
            new Twig_SimpleFunction('color_field', 'Phalcon\\Tag::colorField'), 
            new Twig_SimpleFunction('text_field', 'Phalcon\\Tag::textField'), 
            new Twig_SimpleFunction('numeric_field', 'Phalcon\\Tag::numericField'), 
            new Twig_SimpleFunction('range_field', 'Phalcon\\Tag::rangeField'), 
            new Twig_SimpleFunction('email_field', 'Phalcon\\Tag::emailField'), 
            new Twig_SimpleFunction('date_field', 'Phalcon\\Tag::dateField'), 
            new Twig_SimpleFunction('date_time_field', 'Phalcon\\Tag::dateTimeField'), 
            new Twig_SimpleFunction('date_time_local_field', 'Phalcon\\Tag::dateTimeLocalField'), 
            new Twig_SimpleFunction('month_field', 'Phalcon\\Tag::monthField'), 
            new Twig_SimpleFunction('time_field', 'Phalcon\\Tag::timeField'), 
            new Twig_SimpleFunction('week_field', 'Phalcon\\Tag::weekField'), 
            new Twig_SimpleFunction('password_field', 'Phalcon\\Tag::passwordField'), 
            new Twig_SimpleFunction('hidden_field', 'Phalcon\\Tag::hiddenField'), 
            new Twig_SimpleFunction('file_field', 'Phalcon\\Tag::fileField'), 
            new Twig_SimpleFunction('search_field', 'Phalcon\\Tag::searchField'), 
            new Twig_SimpleFunction('tel_field', 'Phalcon\\Tag::telField'), 
            new Twig_SimpleFunction('url_field', 'Phalcon\\Tag::urlField'), 
            new Twig_SimpleFunction('check_field', 'Phalcon\\Tag::checkField'), 
            new Twig_SimpleFunction('radio_field', 'Phalcon\\Tag::radioField'), 
            new Twig_SimpleFunction('image_input', 'Phalcon\\Tag::imageInput'), 
            new Twig_SimpleFunction('submit_button', 'Phalcon\\Tag::submitButton'), 
            new Twig_SimpleFunction('select_static', 'Phalcon\\Tag::selectStatic'), 
            new Twig_SimpleFunction('select', 'Phalcon\\Tag::select'), 
            new Twig_SimpleFunction('text_area', 'Phalcon\\Tag::textArea'), 
            new Twig_SimpleFunction('form', 'Phalcon\\Tag::form'), 
            new Twig_SimpleFunction('end_form', 'Phalcon\\Tag::endForm'), 
            new Twig_SimpleFunction('get_title', 'Phalcon\\Tag::getTitle'), 
            new Twig_SimpleFunction('get_title_separator', 'Phalcon\\Tag::getTitleSeparator'), 
            new Twig_SimpleFunction('stylesheet_link', 'Phalcon\\Tag::stylesheetLink'), 
            new Twig_SimpleFunction('javascript_include', 'Phalcon\\Tag::javascriptInclude'), 
            new Twig_SimpleFunction('image', 'Phalcon\\Tag::image'), 
            new Twig_SimpleFunction('friendly_title', 'Phalcon\\Tag::friendlyTitle'), 
            new Twig_SimpleFunction('get_doctype', 'Phalcon\\Tag::getDocType'), 
            new Twig_SimpleFunction('tag_html', 'Phalcon\\Tag::tagHtml'), 
            new Twig_SimpleFunction('tag_html_close', 'Phalcon\\Tag::tagHtmlClose')
        ];
    }
}