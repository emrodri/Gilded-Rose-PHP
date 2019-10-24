<?php
declare(strict_types=1);

namespace App;


class ItemQuality
{
  private const MIN_QUALITY = 0;
  private const MAX_QUALITY = 50;

  private $value;


  public function __construct(int $value)
  {
    $this->value = $value;
  }

  public function value(): int
  {
    return $this->value;
  }

  public function __toString(): string
  {
    return strval(self::value());
  }

  public function decrease()
  {
    if ($this->value == self::MIN_QUALITY) {
      return $this;
    }

    return new self($this->value - 1);
  }

  public function increase()
  {
    if ($this->value == self::MAX_QUALITY) {
      return $this;
    }

    return new self($this->value + 1);
  }

  public function reset()
  {
    return new self(self::MIN_QUALITY);
  }

}