<?php

/*
*  Cosmetic for our lobby
*  Why i made this plugin without Item on join or Respawn?
*  Because we use Private plugins to handle it
*/

namespace Team;

use pocketmine\event\{Listener, player\PlayerInteractEvent};
use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\utils\{Config, TextFormat as c};
use pocketmine\Player;

class Main extends PluginBase implements Listener{
  
  public function OnEnable(){
    @mkdir($this->getDataFolder());
    $this->saveDefaultConfig();
    $this->reloadConfig();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function OnInteract(PlayerInteractEvent $event){
    $player = $event->getPlayer();
    $item = $event->getItem();
    $name = $ip = $this->getConfig()->get("name1");
    if($player instanceof Player){
      if($i->getName() === c::AQUA."$name"){
        $ip = $this->getConfig()->get("ip1");
        $port = $this->getConfig()->get("port1")
        $player->transfer($ip, $port);
      }
    }
  }
}
