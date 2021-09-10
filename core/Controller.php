<?php

namespace Core;

use Plugins\SendEmail;
use Plugins\Whatsapp;
use Plugins\Telegram;

class Controller extends Bootstrap
{
    public $plugin;

    public function setPlugin($plugin) {
        switch ($plugin) {
            case 'email':
                $this->plugin = new SendEmail();
                break;
                
            case 'whatsapp':
                $this->plugin = new Whatsapp();
                break;

            case 'telegram':
                $this->plugin = new Telegram();
                break;
        }
    }

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