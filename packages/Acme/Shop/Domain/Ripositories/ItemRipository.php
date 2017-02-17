<?php

namespace Packages\Acme\Shop\Domain\Ripositories;

class ItemRipository
{
	/**
	 * Create a new class instance.
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->items = [
				1 => [
						"id" => 1,
						"name" => "TestProduct1",
						"price" => 12800,
						"stock" => 50,
				],
				2 => [
						"id" => 2,
						"name" => "TestProduct2",
						"price" => 100,
						"stock" => -10,
				],
		];
	}
	
}
