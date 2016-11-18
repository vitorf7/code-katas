<?php

namespace VitorF7\CodeKatas\GildedRose;

/**
 * Class BrieItem
 *
 * @package VitorF7\CodeKatas\GildedRose
 */
class BrieItem extends Item
{
    /**
     *
     */
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->quality == 50) {
            return;
        }

        $this->quality += 1;

        if ($this->sellIn < 0 && $this->quality < 50) {
            $this->quality += 1;
        }
    }
}