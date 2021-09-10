<?php

namespace Core;


class SendService
{
    public $data;
    public $pluginData;

    public function __construct() {
        $this->pluginData = "
        <form action='/send' method='post' accept-charset='utf-8' id='form'>".$this->data."
            <div id='_message' class='px-8 flex my-4 justify-center'>
                <textarea placeholder='Message here...' name='message' id='message' class='w-1/2 outline-none p-4 border-gray-600 border-2 rounded h-32 resize-none text-xl text-gray-600 font-semibold focus:border-blue-600 transition-all hover:border-blue-600'></textarea>
            </div>
            <div id='button' class='px-8 flex my-4 justify-center'>
                <button name='button' id='submit' class='w-1/2 outline-none flex justify-center py-3 rounded text-xl bg-blue-600 text-white font-semibold hover:bg-blue-500 cursor-pointer'><span>Submit</span></button>
            </div>
        </form>";
    }
}