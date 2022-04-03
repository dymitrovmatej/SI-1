<?php
 
/**
 * Cat class
 */
class Cat extends Animal {
 
    /**
     * Vytvoří kočku
     */
    function __construct() {
        parent::__construct(4);
    }
 
    /**
     * přinutí kočku mňoukat.
     */
    function makeSound() {
        echo 'Meow!';
    }
 
}
