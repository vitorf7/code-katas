<?php

namespace VitorF7\CodeKatas\Tests\GildedRose;

use VitorF7\CodeKatas\GildedRose\GildedRoseInitial;

class GildedRoseInitialTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ============================
     *  Initial Setup Starts Here
     * ============================
     */

    /** @test */
    public function it_updates_normal_items_before_sell_date()
    {
        $item = GildedRoseInitial::of('normal', 10, 5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(9, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    /** @test */
    public function it_updates_normal_items_on_sell_date()
    {
        $item = GildedRoseInitial::of('normal', 10, 0); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(8, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    /** @test */
    public function it_updates_normal_items_after_sell_date()
    {
        $item = GildedRoseInitial::of('normal', 10, -5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(8, $item->quality);
        $this->assertEquals(-6, $item->sellIn);
    }

    /** @test */
    public function it_updates_normal_items_with_quality_0()
    {
        $item = GildedRoseInitial::of('normal', 0, 5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(0, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_before_sell_date()
    {
        $item = GildedRoseInitial::of('Aged Brie', 10, 5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(11, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_before_sell_date_with_maximum_quality()
    {
        $item = GildedRoseInitial::of('Aged Brie', 50, 5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_on_sell_date()
    {
        $item = GildedRoseInitial::of('Aged Brie', 10, 0); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(12, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_on_sell_date_near_maximum_quality()
    {
        $item = GildedRoseInitial::of('Aged Brie', 49, 0); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_on_sell_date_with_maximum_quality()
    {
        $item = GildedRoseInitial::of('Aged Brie', 50, 0); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_after_sell_date()
    {
        $item = GildedRoseInitial::of('Aged Brie', 10, -10); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(12, $item->quality);
        $this->assertEquals(-11, $item->sellIn);
    }

    /** @test */
    public function it_updates_brie_items_after_sell_date_with_maximum_quality()
    {
        $item = GildedRoseInitial::of('Aged Brie', 50, -10); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(-11, $item->sellIn);
    }

    /** @test */
    public function it_updates_sulfuras_items_before_sell_date()
    {
        $item = GildedRoseInitial::of('Sulfuras, Hand of Ragnaros', 10, 5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(10, $item->quality);
        $this->assertEquals(5, $item->sellIn);
    }

    /** @test */
    public function it_updates_sulfuras_items_on_sell_date()
    {
        $item = GildedRoseInitial::of('Sulfuras, Hand of Ragnaros', 10, 5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(10, $item->quality);
        $this->assertEquals(5, $item->sellIn);
    }

    /** @test */
    public function it_updates_sulfuras_items_after_sell_date()
    {
        $item = GildedRoseInitial::of('Sulfuras, Hand of Ragnaros', 10, -1); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(10, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    /*
        "Backstage passes", like aged brie, increases in Quality as it's SellIn
        value approaches; Quality increases by 2 when there are 10 days or
        less and by 3 when there are 5 days or less but Quality drops to
        0 after the concert
    */

    /** @test */
    public function it_updates_backstage_pass_items_before_sell_date()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 10,
            11); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(11, $item->quality);
        $this->assertEquals(10, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_close_to_sell_date()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 10,
            10); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(12, $item->quality);
        $this->assertEquals(9, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_close_to_sell_date_at_max_quality()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 50,
            10); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(9, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_very_close_to_sell_date()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 10,
            5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(13, $item->quality); // Goes up by 3
        $this->assertEquals(4, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_very_close_to_sell_date_at_max_quality()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 50,
            5); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_with_one_day_left()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 10,
            1); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(13, $item->quality);
        $this->assertEquals(0, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_with_one_day_left_at_max_quality()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 50,
            1); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(50, $item->quality);
        $this->assertEquals(0, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_on_sell_date()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 10,
            0); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    /** @test */
    public function it_updates_backstage_pass_items_after_sell_date()
    {
        $item = GildedRoseInitial::of('Backstage passes to a TAFKAL80ETC concert', 10,
            -1); // name, quality, sell in x days

        $item->tick();

        $this->assertEquals(0, $item->quality);
        $this->assertEquals(-2, $item->sellIn);
    }

    /**
     * ============================
     *  Initial Setup Ends Here
     * ============================
     */


    // /** @test */
    // public function it_updates_conjured_items_before_sell_date()
    // {
    //     $item = GildedRoseInitial::of('Conjured Mana Cake', 10, 10); // name, quality, sell in x days
    //
    //     $item->tick();
    //
    //     $this->assertEquals(8, $item->quality);
    //     $this->assertEquals(9, $item->sellIn);
    // }
    //
    // /** @test */
    // public function it_updates_conjured_items_at_zero()
    // {
    //     $item = GildedRoseInitial::of('Conjured Mana Cake', 0, 10); // name, quality, sell in x days
    //
    //     $item->tick();
    //
    //     $this->assertEquals(0, $item->quality);
    //     $this->assertEquals(9, $item->sellIn);
    // }
    //
    // /** @test */
    // public function it_updates_conjured_items_on_sell_date()
    // {
    //     $item = GildedRoseInitial::of('Conjured Mana Cake', 10, 0); // name, quality, sell in x days
    //
    //     $item->tick();
    //
    //     $this->assertEquals(6, $item->quality);
    //     $this->assertEquals(-1, $item->sellIn);
    // }
    //
    // /** @test */
    // public function it_updates_conjured_items_on_sell_date_at_zero_quality()
    // {
    //     $item = GildedRoseInitial::of('Conjured Mana Cake', 0, 0); // name, quality, sell in x days
    //
    //     $item->tick();
    //
    //     $this->assertEquals(0, $item->quality);
    //     $this->assertEquals(-1, $item->sellIn);
    // }
    //
    // /** @test */
    // public function it_updates_conjured_items_after_sell_date()
    // {
    //     $item = GildedRoseInitial::of('Conjured Mana Cake', 10, -10); // name, quality, sell in x days
    //
    //     $item->tick();
    //
    //     $this->assertEquals(6, $item->quality);
    //     $this->assertEquals(-11, $item->sellIn);
    // }
    //
    // /** @test */
    // public function it_updates_conjured_items_after_sell_date_at_zero_quality()
    // {
    //     $item = GildedRoseInitial::of('Conjured Mana Cake', 0, -10); // name, quality, sell in x days
    //
    //     $item->tick();
    //
    //     $this->assertEquals(0, $item->quality);
    //     $this->assertEquals(-11, $item->sellIn);
    // }
}
