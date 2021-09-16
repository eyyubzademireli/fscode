<?php

namespace App;

trait Kernel
{
    public $plugin;

    public function setPlugin($plugin) {
        $class = '\\Plugins\\'.$plugin;
        $this->plugin = new $class();
    }
}
