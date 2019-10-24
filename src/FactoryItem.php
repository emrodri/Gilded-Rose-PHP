<?php


namespace App;


class FactoryItem
{
  private const AGED_BRIE_NAME = "Aged Brie";
  private const BACKSTAGE_PASS_NAME = "Backstage passes to a TAFKAL80ETC concert";
  private const SULFURAS_NAME = "Sulfuras, Hand of Ragnaros";

  private static $itemClasses = [
      self::AGED_BRIE_NAME => ItemAgedBrie::class,
      self::BACKSTAGE_PASS_NAME => ItemBackStagePass::class,
      self::SULFURAS_NAME => ItemSulfuras::class
  ];

  public static function of(string $name, int $quality, int $sellIn)
  {
    $name = new ItemName($name);
    $sellIn = new ItemSellIn($sellIn);
    $quality = new ItemQuality($quality);

    $class = isset(self::$itemClasses[$name->value()]) ? self::$itemClasses[$name->value()] : ItemStandard::class;
    return new $class($name, $quality, $sellIn);
  }
}