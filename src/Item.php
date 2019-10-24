<?php


namespace App;


abstract class Item
{

  private $name;
  private $quality;
  private $sellIn;

  public function __construct(ItemName $name, ItemQuality $quality, ItemSellIn $sellIn)
  {
    $this->name = $name;
    $this->sellIn = $sellIn;
    $this->quality = $quality;
  }

  abstract function tick();

  public function name(): ItemName
  {
    return $this->name;
  }

  public function sellIn(): ItemSellIn
  {
    return $this->sellIn;
  }

  public function quality(): ItemQuality
  {
    return $this->quality;
  }

  protected function decreaseSellIn(){
    $this->sellIn->decrease();
  }

  protected function decreaseQuality(){
    $this->quality = $this->quality->decrease();
  }

  protected function increaseQuality(){
    $this->quality = $this->quality->increase();
  }

  protected function hasToBeSoldInLessThan($days){
    return $this->sellIn->isLessThan($days);
  }

  protected function resetQuality()
  {
    $this->quality = $this->quality->reset();
  }
}