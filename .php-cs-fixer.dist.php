<?php

$finder = (new PhpCsFixer\Finder())
    ->in('src')
    ->in('test')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS' => true,
    ])
    ->setFinder($finder)
;