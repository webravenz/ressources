<?php

class WZDeleteRequest extends WZRequest {
  
  public function exec() {
    
    $sql = 'DELETE FROM '.$this->getTable().' '.$this->getWhereSQL();
    
    $this->prepare($sql);
    
    $this->bindWhere();
    
    return $this->sth->execute();
    
  }
  
}

?>