<?php

namespace Plugins;

use Core\SendService;

class Whatsapp extends SendService
{
    public function __construct() {
        $this->data = "
        <div id='_plugin'>
        <input name='plugin' id='plugin' type='hidden' value='Whatsapp'>
        </div>
        <div id='_user_id' class='px-8 flex my-4 justify-center'>
            <input type='text' name='user_id' id='user_id' placeholder='User ID here' class='w-1/2 outline-none px-4 border-gray-600 border-2 rounded h-12 text-xl text-gray-600 font-semibold focus:border-blue-600 transition-all hover:border-blue-600'>
        </div>";
        parent::__construct();
    }

    public function sendMessage($data) {
        // do any process here
        return $data;
    }
}
