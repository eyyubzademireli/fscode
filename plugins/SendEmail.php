<?php

namespace Plugins;

use Core\SendService;

class SendEmail extends SendService
{
    public function __construct() {
        $this->data = "
        <div id='_plugin'>
        <input name='plugin' id='plugin' type='hidden' value='SendEmail'>
        </div>
        <div id='_email' class='px-8 flex my-4 justify-center'>
            <input type='email' name='email' id='email' placeholder='Email here' class='w-1/2 outline-none px-4 border-gray-600 border-2 rounded h-12 text-xl text-gray-600 font-semibold focus:border-blue-600 transition-all hover:border-blue-600'>
        </div>
        <div id='_subject' class='px-8 flex my-4 justify-center'>
            <input type='text' name='subject' id='subject' placeholder='Subject here' class='w-1/2 outline-none px-4 border-gray-600 border-2 rounded h-12 text-xl text-gray-600 font-semibold focus:border-blue-600 transition-all hover:border-blue-600'>
        </div>";
        parent::__construct();
    }

    public function sendMessage($data) {
        // do any process here
        return $data;
    }
}