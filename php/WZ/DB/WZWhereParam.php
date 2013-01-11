<?php

class WZWhereParam {
  
  protected $field;
  protected $cond;
  protected $val;
  protected $count;
  
  protected static $COUNT = 0;
  
  public function __construct($field, $cond, $val) {
    $this->field = $field;
    $this->val = $val;
    $this->cond = $cond;
    
    $this->count = WZWhereParam::$COUNT;
    WZWhereParam::$COUNT++;
  }
  
  public function getSQL() {
    return $this->field.$this->cond.':where_'.$this->count;
  }
  
  public function bindVal($sth) {
    $sth->bindValue(':where_'.$this->count, $this->val);
  }
  
}

?>
