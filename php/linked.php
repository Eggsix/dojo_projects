
<?php

Class Node
{
 public function __construct($val)
 {
  $this->val = $val;
  $this->next = null;
 }
}

Class SinglyLinkedList
{
 public function __construct()
 {
  $this->head = null;
  $this->tail = null;
 }
 public function add($val)
 {
  if($this->head != null)
  {
    $node = new Node($val);
    $this->tail->next = $node;
    $this->tail = &$node;
  }
  else
  {
    $node = new Node($val);
    $this->head = &$node;
    if($this->tail == null)
    {
      $this->tail = &$node;
    }
  }
 }
 public function remove($value)
 {
  $current = $this -> head;
  $previous = $this -> head;
    if($current -> next == null)
    {
      if($current -> val == $value)
      {
        unset($current->val);
        unset($current->next);
        return true;
      }
    }
  $count = false;
  while ($current != null) 
  {
    if($current -> val === $value && $count == false)
    {
      $this -> head = $current -> next;
      unset($current -> next);
      return true;
    }
    
    if($current -> val == $value)
    {
      $previous -> next = $current -> next;
      $current -> next = null;
      return true;
    }
    if($current -> next == null)
    {
    	unset($current);
      unset($previous -> next);
      return true;
    }
    $previous = $current;
    $current = $current -> next;
    $count = true;
  }
  return false;
 }
 public function insert($valueAfter, $newValue)
 {
  $current = $this -> head;
  if($current == null) 
  {
    echo "empty";
    return null;
  }
  $bool = false;
  while($current -> next != null && $bool = false)
  {
    if($current -> val == $valueAfter)
    {
      $node = new Node($newValue);
      $current = $node; 

      $bool = true;   
    }
  }
  //return true if successfully inserted after the valueAfter
  //if value is never found add the new value to the end of the linked list
 }
 public function printList()
 {
  $current = $this -> head;

    if($current == null)
    {
      echo "empty";
      return null;
    } 
    while($current -> next != null)
    {
      echo $current -> val . "<br>";
      $current =  $current -> next;
    }
    echo $current -> val;
  
 }
 public function find($value)
 {
  if($current == null)
  {
    echo "empty";
    return null;
  }
  //return node if value is found
  //return false if not found
 }
 public function isEmpty()
 {
  //return true if the linked list is empty
  //return false if linked list has nodes
 }
}

$list = new SinglyLinkedList();
$list->add('Steven');
$list->add('Bobby');
$list->add('Mr Poopybutthole');

var_dump($list);

?>

