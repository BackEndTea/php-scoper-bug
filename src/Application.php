<?php

namespace ScoperBug;

use Damn\Hello\Sir\Dependency;
use Pimple\Container;

class Application
{
    public function run()
    {
        $container = new Container();
        
        $container['parameter'] = 'Hello';
        
        echo $container['parameter'], "\n";
        Dependency::hello();
    }
}