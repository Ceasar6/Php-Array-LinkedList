<?php


class MyList
{
    public $size;
    public $elements;

    public function __construct()
    {
        $this->elements = array();
    }

    function getElements()
    {
        return $this->elements;
    }


    public function size()
    {
        return count($this->elements);
    }

    public function isEmpty()
    {
        if (!($this->elements)) {
            return true;
        } else {
            return "Not elements";
        }
    }

    public function add($obj)
    {
        array_push($this->elements, $obj);
    }

    public function clear()
    {
        return $this->elements = array();
    }

    public function insert($index, $obj)
    {
        if ($this->isEmpty()) {

        }
    }

    public function remove($index)
    {
        if ($this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index == $i) {
                    array_splice($this->elements, $i, 1);
                } else {
                    return "Khong co gia tri de xoa";
                }
            }
        }
    }

    public function get($index)
    {
        if ($this->isEmpty()) {
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index === $i) {
                    return $this->elements[$i];
                }
            }
        }
    }

    public function sort()
    {
        if ($this->isEmpty()) {
            sort($this->elements);
        }
    }

    public function addAll($arr)
    {
        $this->elements = array_merge($this->elements, $arr);
    }

    function indexOf($obj){
        if ($this->isEmpty()){
            for ($i = 0; $i < $this->size(); $i++) {
                if ($obj === $this->elements[$i]){
                    $arr[] = $i;
                }
            }
            return $arr;
        } else {
            return "Ko co gia tri trong mang";
        }
    }
}

$myList = new MyList();
echo $myList->isEmpty();
$myList->add(5);
$myList->add(10);
$myList->add(-6);
$myList->add(7);
$myList->add(-9);
$myList->add(3);
echo "<br>";
echo $myList->isEmpty();
echo "<br>";
echo $myList->size();
echo "<br>";
$myList->remove(2);
echo "<br>";
echo $myList->get(3);
$myList->addAll([4, 7, 10]);
echo "<br>";
print_r($myList->indexOf(10));
$myList->sort();
$myList->insert(4, 6);


echo "<pre>";
print_r($myList->getElements());
echo "</pre>";