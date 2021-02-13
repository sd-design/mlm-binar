<?php

class Api_model extends CI_Model
{

public function level($level){

}

public function getPartner($id){
  $limit =1;
  $query = $this->db->get_where('partners', array('id' => $id), $limit);
  $left = $this->leftSide($id);
  $result = $this->parserResult($query, $left);
  return $result;
}

private function parserResult($query, $left = null){
  $result = "";
  $left_line = "";
$id_primary = '';
  foreach ($query->result() as $row)
  {
      $result =  "<h3><small>Partner</small>: ".$row->name." ".$row->surname."</h3>";
  }
  foreach ($left->result() as $row)
  {
    if($row->ID != 1){
$left_line = $left_line."<a href='/mlm/partner/".$row->ID."'>".$row->name." ".$row->surname."</a><br>";
}
  }
  $result = $result.$left_line;
  return $result;
  }

  private function leftSide($id){
     $this->db->where('id_up_partner',$id);
    $query = $this->db->get('partners');
    return $query;

  }



}
