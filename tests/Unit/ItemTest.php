<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Packages\Acme\Shop\Domain\Models\Item\Item;

class ItemTest extends TestCase
{
	/**
	 * @test
	 * @return void
	 */
	public function アイテムテスト()
	{
		$Item = app()->make(Item::class);
		$this->assertTrue( count($Item) === 1 );
	}
}