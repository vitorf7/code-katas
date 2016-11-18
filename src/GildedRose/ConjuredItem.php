<?php

namespace VitorF7\CodeKatas\GildedRose;

/**
 * Class ConjuredItem
 *
 * @package VitorF7\CodeKatas\GildedRose
 */
class ConjuredItem extends Item
{
    /**
     *
     */
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->quality == 0) {
            return;
        }

        $this->quality -= 2;

        if ($this->sellIn < 0) {
            $this->quality -= 2;
        }
    }
}