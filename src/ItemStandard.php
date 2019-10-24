<?php


namespace App;


class ItemStandard extends Item
{

  private const DOUBLE_QUALITY_DECREASE_SELL_IN_THRESHOLD = 0;

  function tick()
  {
    $this->decreaseSellIn();
    $this->decreaseQuality();

    if ($this->hasToBeSoldInLessThan(self::DOUBLE_QUALITY_DECREASE_SELL_IN_THRESHOLD)) {
      $this->decreaseQuality();
    }
  }
}