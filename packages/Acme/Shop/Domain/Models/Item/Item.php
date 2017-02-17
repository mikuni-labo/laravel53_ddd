<?php

namespace Packages\Acme\Shop\Domain\Models\Item;

use Packages\Acme\Shop\Domain\Models\ItemId;
use Packages\Acme\Shop\Domain\Models\ItemName;
use Packages\Acme\Shop\Domain\Models\ItemPrice;
use Packages\Acme\Shop\Domain\Models\ItemStock;

class Item
{
	private $id;
	private $name;
	private $price;
	private $stock;
	
	/**
	 * Create a new class instance.
	 * 
	 * @param  ItemId    $id
	 * @param  ItemName  $name
	 * @param  ItemPrice $price
	 * @param  ItemStock $stock
	 * @return void
	 */
	public function __construct(ItemId $id, ItemName $name, ItemPrice $price, ItemStock $stock)
	{
		$this->id    = $id;
		$this->name  = $name;
		$this->price = $price;
		$this->stock = $stock;
	}
	
}
