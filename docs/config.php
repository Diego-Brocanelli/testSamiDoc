<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
   ->files()
   ->name('*.php')
   ->in(__DIR__.'/../src');

$configuration = [
    'theme'     => 'default',
    'title'     => 'Test Sami API',
    'build_dir' => __DIR__.'/build',
    'cache_dir' => __DIR__.'/cache',
];

return new Sami($iterator, $configuration);