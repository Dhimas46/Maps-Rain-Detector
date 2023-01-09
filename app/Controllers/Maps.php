<?php

namespace App\Controllers;

class Maps extends BaseController
{
    public function index()
    {
      $builder = $this->db->table('sensor');
      $query   = $builder->get();
      // Cara 2 Query Manual
      //$query = $this->db->query("SELECT * FROM gawe");
      $data['sensor'] = $query->getResult();
        return view('map/maps', $data);
    }
    public function leaflet()
    {
      $builder = $this->db->table('sensor');
      $query   = $builder->get();
      // Cara 2 Query Manual
      //$query = $this->db->query("SELECT * FROM gawe");
      $data['sensor'] = $query->getResult();
        return view('map/leaflet', $data);
    }
    public function gis()
    {
      $builder = $this->db->table('sensor');
      $query   = $builder->get();
      $keyword = $this->request->getVar('keyword');
      if ($keyword) {
      $sensor = $this->Msensor->search($keyword);
      } else {
        $sensor = $this->Msensor;
      }

      // Cara 2 Query Manual
      //$query = $this->db->query("SELECT * FROM gawe");
      $data = [
        'sensor' => $query->getResult(),
        'keyword' => $this->Msensor,
      ];
        return view('map/gis', $data);
    }
}
