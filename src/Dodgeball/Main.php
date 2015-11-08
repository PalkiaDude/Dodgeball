<?php
  namespace DodgeBall
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
   //setup game system via sign
   public function onHurt(ProjectileHitEvent $event) {
     $p = $event->getEntity();
  if($event instanceof Snowball /* i picked arrow cause it was the first to come to mind*/){
  $this->getServer()->broadcastMessage("Someone has been killed");
  $p->setHealth(0);
  }
   }
  public function gameFunction(){
    //i will use a plugintask and call this function via: $this->getOwner()->gameFunction();
    if($this->Status===0){
      //do nothing ofc
    }
  if($this->Status===1)
  foreach($this->Players as $p){
  if(isset($this->Player[$p->getName()])){
    
    $p->setLevel($this->config->get("gameWorld"));
    
  }
  }
  
  }
   }
