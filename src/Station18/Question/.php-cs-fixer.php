<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'trailing_comma_in_multiline' => true,// この一行を追加
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
