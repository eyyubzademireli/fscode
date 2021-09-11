<?php

namespace App;

trait Kernel
{
    public $plugin;
    public $plugins = [
        "email" => \Plugins\SendEmail::class,
        "whatsapp" => \Plugins\Whatsapp::class,
        "telegram" => \Plugins\Telegram::class,
    ];
    
    public function setPlugin($plugin) {
        $this->plugin = new $this->plugins[$plugin]();
    }
}
