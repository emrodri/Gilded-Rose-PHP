<?php


namespace App;


class ItemAgedBrie extends Item
{
  private const DOUBLE_QUALITY_DECREMENT_SELL_IN_THRESHOLD = 0;

  public function tick()
  {
    $this->decreaseSellIn();
    $this->increaseQuality();


    if ($this->hasToBeSoldInLessThan(self::DOUBLE_QUALITY_DECREMENT_SELL_IN_THRESHOLD)) {
      $this->increaseQuality();
    }
  }
}