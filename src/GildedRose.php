<?php

namespace App;

class GildedRose
{


    public static function of($name, $quality, $sellIn) {
        return FactoryItem::of($name, $quality, $sellIn);
    }
}
