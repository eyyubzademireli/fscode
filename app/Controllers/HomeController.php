<?php

namespace App\Controllers;


use Core\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function getData($req) {
        $data = $req->getContent();
        return $data = json_decode($data);
    }

    public function home() {
        return $this->view('home');
    }
    
    public function pluginForm(Request $req, Response $res) {
        $data = $this->getData($req);
        $plugin = $data->plugin;
        return $res->setContent($this->sendForm($plugin));
    }


    public function sendMessage(Request $req, Response $res) {
        $data = $this->getData($req);
        $plugin = $data->plugin;
        $data = $data->data;
        return $res->setContent(json_encode($this->sendResponse($data, $plugin)));
    }


}
