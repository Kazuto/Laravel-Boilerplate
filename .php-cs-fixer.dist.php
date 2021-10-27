<?php

use Kazuto\PhpCsPreset\Preset;

$classLoader = require __DIR__ . '/vendor/autoload.php';
$classLoader->register(true);

$rules = [
];

$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap')
    ->notPath('storage')
    ->notPath('vendor')
    ->notPath('node_modules')
    ->in(getcwd())
    ->name('*.php')
    ->notName('index.php')
    ->notName('server.php')
    ->notName('_ide_helper.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Preset::apply($finder, $rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
