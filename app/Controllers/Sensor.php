<?php

namespace App\Controllers;

class Sensor extends BaseController
{
    public function index()
    {
      $builder = $this->db->table('sensor');
      $query   = $builder->get();
      // Cara 2 Query Manual
      //$query = $this->db->query("SELECT * FROM gawe");
      $data['sensor'] = $query->getResult();
      return view('sensor/get', $data);
    }

    public function create()
    {
      return view('sensor/add');
    }
    public function store()
    {
      //cara 1
      //$data = $this->request->getPost();
      // //cara 2 lebih spesifik
      $data = [
        'nama_sensor' => $this->request->getVar('nama_sensor'),
        'latitude' => $this->request->getVar('latitude'),
        'longitude' => $this->request->getVar('longitude'),
        'status' => $this->request->getVar('status'),
      ];

      $this->db->table('sensor')->insert($data);
      if ($this->db->affectedRows() > 0) {
        return redirect()->to(site_url('sensor'))->with('success', 'Data Berhasil Disimpan');
      }
    }
    public function edit($id = null)
  {
      if ($id != null) {
        $query = $this->db->table('sensor')->getWhere(['id_sensor' => $id]);
        if ($query->resultID->num_rows > 0) {
          $data['sensor'] = $query->getRow();
          return view ('sensor/edit', $data);
        } else{
          throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
      } else {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      }
  }

  public function update($id)
  {
    //cara 1
    //$data = $this->request->getPost();
    // //cara 2 lebih spesifik
     $data = [
       'nama_sensor' => $this->request->getVar('nama_sensor'),
       'latitude' => $this->request->getVar('latitude'),
       'longitude' => $this->request->getVar('longitude'),
       'status' => $this->request->getVar('status'),
     ];
    unset($data['_method']);
    $this->db->table('sensor')->where(['id_sensor' => $id]) -> update($data);
    return redirect()->to(site_url('sensor'))->with('success', 'Data Berhasil Diupdate');
  }
  public function destroy ($id)
      {
        $this->db->table('sensor')->where(['id_sensor' => $id]) -> delete();
        return redirect()->to(site_url('sensor'))->with('success', 'Data Berhasil Dihapus');
      }
}
