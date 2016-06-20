<?php

namespace O2Web\BaseTranslator\Installer;

use Composer\Script\Event;

class Installer
{
    public static function postInstall(Event $event)
    {
        $composer = $event->getComposer();
        var_dump($composer);
        echo "Installed";
    }
}