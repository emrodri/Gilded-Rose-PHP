<?php
declare(strict_types=1);

namespace App;


class ItemSellIn
{

  private $days;


  public function __construct(int $days)
  {
    $this->days = $days;
  }

  public function value(): int
  {
    return $this->days;
  }

  public function __toString(): string
  {
    return strval(self::value());
  }

  public function decrease()
  {
    $this->days -= 1;
  }

  public function isLessThan($days)
  {
    return $this->days < $days;
  }


}