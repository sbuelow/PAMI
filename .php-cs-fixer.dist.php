<?php

$finder = (new PhpCsFixer\Finder())
    ->in('src')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS' => true,
    ])
    ->setFinder($finder)
;