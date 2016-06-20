<?php

namespace O2Web\BaseTranslator\Installer;

use ComposerScriptEvent as Event;

class Installer
{
    public static function postInstall(Event $event)
    {
        $composer = $event->getComposer();
        echo "Installed";
    }
}