<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Strategy;

/**
 * PlaneStrategy is travel strategy with a plane
 */
class PlaneStrategy implements TravelStrategy
{

    public function move()
    {
        echo "I'm flying";
    }

}