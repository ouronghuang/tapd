<?php

$header = '';

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        'header_comment' => array('header' => $header),
        'array_syntax' => array('syntax' => 'short'),
        'ordered_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'php_unit_construct' => true,
        'php_unit_strict' => true,
        'not_operator_with_successor_space' => true,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('conf')
            ->exclude('node_modules')
            ->exclude('public')
            ->exclude('resources')
            ->exclude('storage')
            ->exclude('vendor')
            ->in(__DIR__)
    )
;
