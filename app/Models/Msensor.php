<?php
namespace App\Models;

use CodeIgniter\Model;

class Msensor extends Model

 {
  public function search($keyword)
  {
   $builder = $this->table('sensor');
   $builder->like('nama_sensor', $keyword;
   return $builder;

   //return $this->table('sensor')->like('nama_sensor', $keyword);
  }

  public function daftarSensor(){
  $query = $this->db->get('sensor');
  return $query;
  }

}

 ?>
