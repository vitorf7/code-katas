<?php

namespace VitorF7\CodeKatas\GildedRose;

/**
 * Class GildedRose
 *
 * @package VitorF7\CodeKatas\GildedRose
 */
class GildedRose
{
    /**
     * @var array
     */
    protected static $lookup = [
        'normal' => NormalItem::class,
        'Aged Brie' => BrieItem::class,
        'Sulfuras, Hand of Ragnaros' => SulfurasItem::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePassItem::class,
        'Conjured Mana Cake' => ConjuredItem::class
    ];

    /**
     * @param $name
     * @param $quality
     * @param $sellIn
     *
     * @return mixed
     */
    public static function of($name, $quality, $sellIn)
    {
        $class = isset(static::$lookup[$name]) ? static::$lookup[$name] : NormalItem::class;

        return new $class($name, $quality, $sellIn);
    }
}