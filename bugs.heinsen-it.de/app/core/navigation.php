<?php

namespace hitbugsreader\app\core;
class navigation
{


    public static function showMainNav():void
    {
        require_once DOCROOT.'/'.'app/views/navigation.php';

    }


    public static function showAdminNav():void
    {

        require_once DOCROOT.'/'.'app/views/adminnav.php';
    }

    public static function showSidebar():void
    {

        require_once DOCROOT.'/'.'app/views/sidebar.php';
    }

    public static function showextraScript(string $name):void
    {
        require_once DOCROOT.'/'.'app/views/' . $name . '.php';

    }

    public function ShowChat($wkn, $mywkn)
    {
        /* if(System::ReadUser('chat',SESSION::get('wkn')) == 1)
             {
               require 'views/chat.php';
             } */
    }


}