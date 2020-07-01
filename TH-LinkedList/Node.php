<?php
namespace TH;


class Node
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = Null;
    }
    function readNode(){
        return $this->data;
    }
}