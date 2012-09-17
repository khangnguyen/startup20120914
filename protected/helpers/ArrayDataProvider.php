<?php
class ArrayDataProvider extends CDataProvider {

  public function __construct($id, $data) {
    $this->setData($data);
    $this->setId($id);
  }

  public function calculateTotalItemCount() {
    return count($this->getData());
  }

  public function fetchData() {
    return $this->getData();
  }

  public function fetchKeys() {
    $keys = array();
    foreach ($this->getData() as $row) {
      $keys[] = $row->getAttribute('id');
    } 
    return $keys;
  }
}
