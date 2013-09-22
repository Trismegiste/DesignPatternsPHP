<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Tests\Strategy;

use DesignPatterns\Strategy;

/**
 * HolidayTest tests the strategy of Holiday
 */
class HolidayTest extends \PHPUnit_Framework_TestCase
{

    /**
     * By injecting strategy (and not creating it in the ctor) you can
     * mockup your strategy and test only the Context
     */
    public function testWithMockup()
    {
        $strat = $this->getMock('DesignPatterns\Strategy\TravelStrategy');
        $journey = new Strategy\Holiday($strat);
        $this->expectOutputRegex('#place is kewl#');
        $journey->makeATrip();
    }

    public function testWithPlane()
    {
        $strat = new Strategy\PlaneStrategy();
        $journey = new Strategy\Holiday($strat);
        $this->expectOutputRegex('#flying#');
        $journey->makeATrip();
    }

    public function testWithTrain()
    {
        $strat = new Strategy\TrainStrategy();
        $journey = new Strategy\Holiday($strat);
        $this->expectOutputRegex('#late#');
        $journey->makeATrip();
    }

}