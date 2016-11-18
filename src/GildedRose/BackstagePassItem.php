<?php

namespace VitorF7\CodeKatas\GildedRose;

/**
 * Class BackstagePass
 *
 * @package VitorF7\CodeKatas\GildedRose
 */
class BackstagePassItem extends Item
{
    /**
     * @return int|void
     */
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->quality == 50) {
            return;
        }

        if ($this->sellIn < 0) {
            return $this->quality = 0;
        }

        $this->quality += 1;

        if ($this->sellIn < 10) {
            $this->quality += 1;
        }

        if ($this->sellIn < 5) {
            $this->quality += 1;
        }
    }
}