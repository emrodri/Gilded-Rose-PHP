<?php
declare(strict_types=1);

namespace App;


class ItemName
{
  private $value;


  public function __construct(string $name)
  {
    $this->value = $name;
  }

  public function __invoke()
  {
    return $this->value;
  }

  public function value()
  {
    return $this->value;
  }

  public function __toString()
  {
    return $this->value;
  }


}