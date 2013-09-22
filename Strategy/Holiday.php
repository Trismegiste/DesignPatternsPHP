<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Strategy;

/**
 * Holiday is an example of Strategy pattern. This class is the "Context"
 * in the strategy pattern. It uses different strategy to move a location.
 * 
 * This pattern is very close to the template pattern with 2 major changes :
 * - you rely on composition over inheritance (in most case, this is better, but not always)
 * - You can switch strategy (plane, train...) anytime after the creation of
 *   the holiday object if there is a setter for that.
 * 
 * Also useful for more technical strategies like array sorting (very common)
 */
class Holiday
{

    protected $travelStrategy;

    /**
     * Injecting the strategy into the ctor is not mandatory but a good pratice
     * (for Dependency Inversion Principle)
     * 
     * Notice that the type-hint is an interface, this is a key-feature if
     * we care about Liskov Substitution Principle.
     * 
     * @param \DesignPatterns\Strategy\TravelStrategy $strat
     */
    public function __construct(TravelStrategy $strat)
    {
        $this->travelStrategy = $strat;
    }

    /**
     * Do the trip with the travel strategy
     */
    public function makeATrip()
    {
        $this->travelStrategy->move();
        echo "This place is kewl";
        $this->travelStrategy->move();
    }

    /**
     * Switches strategy. This method is not always mandatory but this is 
     * a gold feature for this pattern.
     * 
     * @param \DesignPatterns\Strategy\TravelStrategy $strat
     */
    public function setStrategy(TravelStrategy $strat)
    {
        $this->travelStrategy = $strat;
    }

}