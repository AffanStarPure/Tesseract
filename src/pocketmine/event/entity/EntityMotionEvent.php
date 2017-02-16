<?php



namespace pocketmine\event\entity;

use pocketmine\entity\Entity;

use pocketmine\event\Cancellable;
use pocketmine\math\Vector3;

class EntityMotionEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	/** @var Vector3 */
	private $mot;

	public function __construct(Entity $entity, Vector3 $mot){
		$this->entity = $entity;
		$this->mot = $mot;
	}

	/**
	 * @return Vector3
	 */
	public function getVector(){
		return $this->mot;
	}

	/**
	 * @return EventName
	 */
	public function getName(){
		return "EntityMotionEvent";
	}

}
