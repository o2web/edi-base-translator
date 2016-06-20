<?php

namespace O2Web\BaseTranslator\Installer;

use Composer\Script\Event;

class Installer
{
    const CONFIG_DIR = 'config';
    const SOURCE_DIR = 'src';
    const LOG_DIR = 'log';

    public static function postInstall(Event $event)
    {
        $composer = $event->getComposer();
        $vendorPath = $composer->getConfig()->get('vendor-dir');

        if (file_exists($vendorPath . DS . static::CONFIG_DIR)) {
            mkdir($vendorPath . DS . static::CONFIG_DIR, 0775);
        }
        if (file_exists($vendorPath . DS . static::SOURCE_DIR)) {
            mkdir($vendorPath . DS . static::SOURCE_DIR, 0775);
        }
        if (file_exists($vendorPath . DS . static::LOG_DIR)) {
            mkdir($vendorPath . DS . static::LOG_DIR, 0775);
        }

        echo "Installed";
    }

}