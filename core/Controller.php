<?php

namespace Core;

use App\Kernel;

class Controller extends Bootstrap
{
    use Kernel;
    
    public function view($view, $data = [])
    {
        return $this->view->show($view, $data);
    }

    public function sendForm($plugin) {
        $this->setPlugin($plugin);
        return $this->plugin->pluginData;
    }

    public function sendResponse($data, $plugin) {
        $this->setPlugin($plugin);
        return $this->plugin->sendMessage($data);
    }
}