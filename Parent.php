<?php

class Parrent extends Human {
    
    /**
     *
     * @var array
     */
    protected $children = array();
    
    /**
     * 
     * @return string
     */
    public function getChildren() {
        return $this->children;
    }
    
    /**
     * 
     * @param array $children
     */
    public function setChildren(array $children) {
        $this->children = $children;
    }
    
    /**
     * 
     * @param Child $child
     */
    public function addChild(Child $child)
    {
        $this->children[] = $child;
       
    }
    
    /**
     * 
     * @param Child $child
     */
    public function removeChild(Child $child)
    {
        
     
        
        $key = array_search($child, $this->children,true);
     
        unset($this->children[$key]);
       
    }
    

}
