<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->in($dir = '/home/ci/project')
;


return new Sami($iterator, array(
    'title'                => 'API',
    'build_dir'            => '/home/ci/build/api/%version%',
    'cache_dir'            => '/home/ci/build/cache/project/%version%',
    'default_opened_level' => 2,
));
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                                                  
~                                                                                    
