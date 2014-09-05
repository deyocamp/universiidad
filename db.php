<?php

class db
{
  private $db;
  
  private function open()
  {
      $this->db =  mysql_connect("mysql.hostinger.es", "u185769451_dey", "universidad");
      
      mysql_select_db("u185769451_pepe");
      
  }
  
  private function close()
  {
      mysql_close($this->db);
      
  }
  
  
  function ejecute($query)
  {
      $this->open();
      
      mysql_query($query,$this->db);
      $this->close();
      
  }
  
  public function gettable($query)
  {
    $dataset = array();  
    $this->open();
      
  $data = mysql_query($query,$this->db);
  $count = mysql_num_fields($data);
  while ($row =mysql_fetch_array($data))
  {
      $rowtem = array();
      for($i = 0; $i < $count; $i++)
          array_push ($rowtem, $row[$i]);
      array_push($dataset, $rowtem); 
  }
  return $dataset;
  }
}
