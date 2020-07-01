<?php


namespace BT;



class Node
{
    public $element;
    public $next;
    public function __construct($element)
    {
        $this->element = $element;
        $this->next =null;
    }
    public function getNode(){
        return $this->element;
    }
}