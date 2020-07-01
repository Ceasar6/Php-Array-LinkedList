<?php
namespace BT;

use BT\Node;
include_once 'Node.php';

class LinkedList
{
    private $count;
    private $firstNode;
    private $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirst($element)
    {
        $link = new Node($element);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        $this->count++;
        if ($this->lastNode == null) {
            $this->lastNode = $link;

        }
    }

    public function addLast($element)
    {
        if ($this->firstNode == null) {
            $this->addFirst($element);
        } else {
            $link = new \BT\Node($element);
            $this->lastNode->next = $link;
            $link = $this->lastNode;
            $link->next = null;
            $this->count++;
        }
    }
    function getLinkedList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->getNode());
            $current = $current->next;
        }
        return $listData;
    }

    public function add($index, $element)
    {
        if ($index == 0) {
            $this->addFirst($element);
        } else {
            $link = new \BT\Node($element);
            $previous = $this->firstNode;
            $current = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $previous->next = $link;
            $link->next = $current;
            $this->count++;
        }
    }

    public function removeFirst()
    {
        $this->firstNode = $this->firstNode->next;
    }

    public function removeLast()
    {
        if ($this->firstNode != null) {
            if ($this->firstNode->next == null) {
                $this->firstNode = null;
                $this->count--;
            } else {
                $previous = $this->firstNode;
                $current = $this->firstNode->next;
                while ($current->next != null) {
                    $previous = $current;
                    $current = $current->next;
                }
                $previous->next = null;
                $this->count--;
            }
        }
    }
    function delete($index){
        $current = $this->firstNode;
        $pre = $this->firstNode;

        for ($i = 0; $i < $index; $i++) {
            $pre = $current;
            $current = $current->next;
        }
        $pre->next = $current->next;
        $this->count--;
    }
    function totalNode(){
        return $this->count;
    }

    function find($index){
        $current = $this->firstNode;
    }
}


$linkedList = new LinkedList();
$linkedList->addFirst('O');
$linkedList->addFirst('L');
$linkedList->addFirst('L');
$linkedList->addFirst('E');
$linkedList->addFirst('H');
$linkedList->addLast('W');

$linkedList->add(2, "A");
$linkedList->removeFirst();
$linkedList->removeFirst();
$linkedList->delete(2);
echo $linkedList->totalNode();




echo "<pre>";
print_r($linkedList->getLinkedList());
echo "</pre>";


