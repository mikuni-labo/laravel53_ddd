<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Packages\Acme\Shop\Domain\Models\Item;

class ItemTest extends TestCase
{
	/**
	 * A basic test example.
	 * 
	 * @return void
	 */
	public function アイテムテスト()
	{
		$Item = app()->make(Item::class);
		$this->assertTrue( count($item) === 1 );
	}
}