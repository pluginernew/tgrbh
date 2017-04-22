<?php

namespace tgrbh;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{
  
  public function onEnable(){
    $this->getServer()->getLogger()->info(Color::GREEN."Plugin is on");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($sender->isOp()){
      switch($cmd->getName()){
        case 'heal':
          $sender->setHealth(20);
      } else {
        $sender->setHealth(Color::RED."You Not OP !!");
      }
    }
  }
}
