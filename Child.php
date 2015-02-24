<?php

class Child extends Human {
    
    /**
     *
     * @var Parrent
     */
    protected $parent;

    /**
     *
     * @var array
     */
    protected $classes = array();

    /**
     * 
     * @return array
     */
    function getClasses() {
        return $this->classes;
    }

    /**
     * 
     * @param array $classes
     */
    function setClasses(array $classes) {
        $this->classes = $classes;
    }

    /**
     * 
     * @param string $class
     */
    function addclass($class) {
        $this->classes[] = $class;
    }

    /**
     * 
     * @param string $class
     */
    function removeClass($class) {
        $key = array_search($class, $this->classes);

        unset($this->classes[$key]);
    }

    /**
     * 
     * @return string
     */
    function getParent() {
        return $this->parent;
    }

    /**
     * 
     * @param Parrent $parent
     */
    function setParent(Parrent $parent = NULL) {
        $this->parent = $parent;
    }

}
