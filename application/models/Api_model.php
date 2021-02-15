<?php

class Api_model extends CI_Model
{

public function level($level){

}

public function getPartnerName($id){
  $limit =1;
  $query = $this->db->get_where('partners', array('id' => $id), $limit);
  foreach ($query->result() as $row)
  {
      $result = $row->name." ".$row->surname;
  }
  return $result;
}
  public function getPartnerLeft($id){
     $this->db->where('id_up_partner',$id);
    $query = $this->db->get('partners');
    return $query->result();

  }



}
