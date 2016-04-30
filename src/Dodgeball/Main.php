<?php
  namespace DodgeBall;
  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\event\entity\ProjectileHitEvent;
  use pocketmine\Player;
  use pocketmine\Server;
   class Main extends PluginBase implements Listener{
  public Players = array();
  public Status = 0;
  public User = array();
  public Time = 0;
  
    public function onEnable() {
$this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info(TextFormat::GREEN . "Dodgeball Plugin has been enabled!");
    }
   
   public function onHurt(ProjectileHitEvent $event) {
     $p = $event->getPlayer();
     $level = $p->getLevel->getName();
     $arena = getLevelByName("DodgeballArena");
  if($event instanceof Snowball){
  if($level === $arena){
  $this->getServer()->broadcastMessage("Someone has been killed");
  $p->setHealth(0);
  }
   }
}
  public function 
