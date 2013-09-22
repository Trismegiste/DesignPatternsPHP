<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Strategy;

/**
 * TravelStrategy is a contract for a strategy of travel
 * 
 * Used by Holiday. This IS the strategy here
 */
interface TravelStrategy
{

    public function move();
}