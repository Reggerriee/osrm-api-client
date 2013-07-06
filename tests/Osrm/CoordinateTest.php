<?php

class CoordinateTest extends PHPUnit_Framework_TestCase {

  protected $obj = null;

  protected function setUp() {
    $this->obj = new Osrm\Coordinate(1.2, 3.4);
  }

  public function testLatitude() {
    $this->assertEquals(3.4, $this->obj->getLatitude());
  }
  
  public function testLongitude() {
    $this->assertEquals(1.2, $this->obj->getLongitude());
  }
}
?>