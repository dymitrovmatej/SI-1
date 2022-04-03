<?php
 
/**
 * Dog class
 */
class Dog extends Animal {
 
    /**
     * Vytvoří psa
     */
    function __construct() {
        parent::__construct(4);
    }
 
    /**
     *přinutí psa štěkat.
     */
    function makeSound() {
        echo 'Haf!';
    }
 
}
