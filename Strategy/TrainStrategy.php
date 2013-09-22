<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Strategy;

/**
 * TrainStrategy is travel strategy with a Train
 */
class TrainStrategy implements TravelStrategy
{

    public function move()
    {
        echo "I'm late with SNCF";
    }

}