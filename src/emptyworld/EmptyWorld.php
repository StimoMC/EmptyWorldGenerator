<?php

namespace emptyworld;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\world\generator\GeneratorManager;

class EmptyWorld extends PluginBase{

    public function onLoad(): void
    {
        Server::getInstance()->getPluginManager()->enablePlugin($this);
    }

    public function onEnable(): void
    {
        GeneratorManager::getInstance()->addGenerator(EmptyGenerator::class, "void", fn() => null, true);
    }
}