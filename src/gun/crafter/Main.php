<?php

namespace gun\crafter;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;

class Main extends PluginBase implements Listener{
  
	public $prefix = "§9§lguncrafter§8§l»§r §7";
  
public function onEnale(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function onInteract(PlayerInteractEvent $event) {
    if($event->getBlock()->getId() == 63 || $event->getBlock()->getId() == 68) {
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $sender, int $data = null){
			$result = $data;
			if($result === null){
				return true;
			}
			switch($result){
			    case 0:
                            $sender->sendMessage("§3trail ui closed");
                            case 1:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase remove {$sender->getName()}");
                            break;
                            case 2:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} flame 0");
                            break;
                            case 3:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} redstone 0 ");
                            break;
                            case 4:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} villager_angry 0 ");
                            break;
                            case 5:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} villager_happy 0 ");
                            break;
                            case 6:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} dust 0 ");
                            break;
                            case 7:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} heart 0 ");
                            break;
                            case 8:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} ink 0 ");
                            break;
                            case 9:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} drip_lava 0 ");
                            break;
                            case 10:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} water_splash 0 ");
                            break;
                            case 11:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} drip_water 0 ");
                            break;
                            case 12:
                            if (!($sender instanceof Player)) return true;
                            $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "particlechase set {$sender->getName()} smoke 0 ");
                            break;
                        }
		});
                $form->setTitle("particle ui");
                $form->addButton("§3close");
                $form->addButton("remove trail");
                $form->addbutton("flame");
                $form->addbutton("redstone");
                $form->addbutton("angry");
                $form->addbutton("happy");
                $form->addbutton("dust");
                $form->addbutton("heart");
                $form->addbutton("music notes");
                $form->addbutton("lava");
                $form->addbutton("water");
                $form->addbutton("water 2");
                $form->addbutton("smoke");
		$form->sendToPlayer($player);
     }
 }
}
