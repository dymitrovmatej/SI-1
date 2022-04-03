<?php
 
/**
 * Třída Animal.
 */
abstract class Animal {
 
    /**
     * Kolik má zvíře nohou?
     */
    public $legs;
 
    /**
     * Constructor
     */
    function __construct($legs) {
        $this->legs = $legs;
    }
 
    /**
     * Vrací počet nohou.
     */
    function getLegs() {
        return $this->legs;
    }
 
    /**
     * Vypíše zvuk zvířete.
     */
    abstract function makeSound();
 
}
