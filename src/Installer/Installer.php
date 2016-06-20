<?php

namespace O2Web\BaseTranslator\Installer;

use Composer\Script\Event;

class Installer
{
    const CONFIG_DIR = 'config';
    const SOURCE_DIR = 'src';
    const LOG_DIR = 'log';
    const LIB_DIR = 'lib';

    const AUTOLOAD = '_autoload.php';
    const BOOTSTRAP = 'bootstrap.php';
    const CONSOLE = 'console.php';

    public static function postInstall(Event $event)
    {
        $composer = $event->getComposer();
        $vendorPath = $composer->getConfig()->get('vendor-dir');

        $projectPath = dirname($vendorPath);

        if (!file_exists($projectPath . '/' . static::CONFIG_DIR)) {
            mkdir($projectPath . '/' . static::CONFIG_DIR, 0775);
        }
        if (!file_exists($projectPath . '/' . static::SOURCE_DIR)) {
            mkdir($projectPath . '/' . static::SOURCE_DIR, 0775);
        }
        if (!file_exists($projectPath . '/' . static::LOG_DIR)) {
            mkdir($projectPath . '/' . static::LOG_DIR, 0775);
        }

        $source = dirname(__DIR__);

        if (!file_exists($projectPath . '/' . static::LIB_DIR . '/' . static::AUTOLOAD)) {
            copy($source . '/' . static::LIB_DIR . '/' . static::AUTOLOAD , $projectPath . '/' . static::AUTOLOAD);
            echo "Autoload file has been copied\n";
        }
        if (!file_exists($projectPath . '/' . static::LIB_DIR . '/' . static::BOOTSTRAP)) {
            copy($source . '/' . static::LIB_DIR . '/' . static::BOOTSTRAP , $projectPath . '/' . static::BOOTSTRAP);
            echo "Bootstrap file has been copied\n";
        }
        if (!file_exists($projectPath . '/' . static::LIB_DIR . '/' . static::CONSOLE)) {
            copy($source . '/' . static::LIB_DIR . '/' . static::CONSOLE, $projectPath . '/' . static::CONSOLE);
            echo "Console file has been copied\n";
        }

        echo "\nInstallation has finished\n";
    }

}