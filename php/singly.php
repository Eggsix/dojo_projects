<?php
ini_set('xdebug.var_display_max_depth', 100);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);
Class Node{
  public function __construct($val)
  {
    $this->value = $val;
    $this->next = null;
  }
}

Class SinglyLinkeList{

 public function __construct()
 {
  $this->head = null;
  $this->tail = null;
 }
 public function add($val)
 {
  if($this->head == null)
  {
    $node = new Node($val);
    $this->head = $node;
    $this->tail = $node;
  } 
  else if($this->head != null)
  {
    $node = new Node($val);
    $this->tail = $node;
    $this->head 
  }
  //return true if added correctly
 }
 public function remove($value)
 {
  //return true if correctly removed
  //return false if value was never found
 }
 public function insert($valueAfter, $newValue)
 {
  //return true if successfully inserted after the valueAfter
  //if value is never found add the new value to the end of the linked list
 }
 public function printList()
 {
  //echo all values in the linked list
 }
 public function find($value)
 {
  //return node if value is found
  //return false if not found
 }
 public function isEmpty()
 {
  //return true if the linked list is empty
  //return false if linked list has nodes
 }
}
$list = new SinglyLinkeList();
$list->add("Preston");
$list->add("James");

var_dump($list);
?>