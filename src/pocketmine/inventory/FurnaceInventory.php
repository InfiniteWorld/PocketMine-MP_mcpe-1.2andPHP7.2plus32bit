<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\inventory;

use pocketmine\item\Item;
use pocketmine\network\mcpe\protocol\types\WindowTypes;
use pocketmine\tile\Furnace;

class FurnaceInventory extends ContainerInventory{
	/** @var Furnace */
	protected $holder;

	public function __construct(Furnace $tile){
		parent::__construct($tile, 3);
	}

	public function getNetworkType() : int{
		return WindowTypes::FURNACE;
	}

	/**
	 * This override is here for documentation and code completion purposes only.
	 * @return Furnace
	 */
	public function getHolder(){
		return $this->holder;
	}

	/**
	 * @return Item
	 */
	public function getResult() : Item{
		return $this->getItem(2);
	}

	/**
	 * @return Item
	 */
	public function getFuel() : Item{
		return $this->getItem(1);
	}

	/**
	 * @return Item
	 */
	public function getSmelting() : Item{
		return $this->getItem(0);
	}

	/**
	 * @param Item $item
	 */
	public function setResult(Item $item) : void{
		$this->setItem(2, $item);
	}

	/**
	 * @param Item $item
	 */
	public function setFuel(Item $item) : void{
		$this->setItem(1, $item);
	}

	/**
	 * @param Item $item
	 */
	public function setSmelting(Item $item) : void{
		$this->setItem(0, $item);
	}
}
