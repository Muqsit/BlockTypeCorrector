<?php
namespace corrector;

use pocketmine\scheduler\PluginTask;

class Corrector extends PluginTask {
    private $bpt;
    public function __construct(Main $plugin, $bpt) {
        parent::__construct($plugin);
        $this->bpt = $bpt;
    }
    public function onRun($currentTick) {
        $blocks = 0;
        foreach($this>getOwner()->getServer()->getLevels() as $level) {
            foreach($level->getChunks() as $chunk) {
                for($x = 0; $x <= 16; $x++) {
                    for($z = 0; $z <= 16; $z++) {
                        for($y = 0; $y <= 256; $y++) {
                            if($blocks < $this->bpt) {
                                //TODO set blocks to be changed
                            }else{
                                $this->getOwner()->getServer()->getScheduler()->scheduleDelayedTask(); //TODO
                            }
                        }
                    }
                }
            }
        }
    }
}
