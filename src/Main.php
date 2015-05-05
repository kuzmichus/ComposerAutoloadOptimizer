<?php
namespace \Kuzmichus\Composer\Plugin\AutoloadOptimizer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Script\ScriptEvents;

class Main implements PluginInterface, EventSubscriberInterface
{
    protected $composer;
    protected $io;

    public function activate(Composer $composer, IOInterface $io) {
        $this->composer = $composer;
        $this->io       = $io;
    }

    public static function getSubscribedEvents() {
        var_dump('dddddd');
        $result = array(
            ScriptEvents::POST_AUTOLOAD_DUMP => array(
                array( 'onPostIutoloadDumpCmd', 0 )
            ),
        );
        return $result;
    }

    public function onPostIutoloadDumpCmd(CommandEvent $event) {

    }
} 
