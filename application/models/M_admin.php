<?php

class M_admin extends CI_Model
{
  // public function select($tabel)
  // {
  //     $query = $this->db->get($tabel);
  //     return $query->result();
  // }
  public function get_data()
  {
    $query = $this->db->get('tb_user');
    return $query->result();
  }


  ####################################
  // CRUD
  ####################################

  public function insert($tabel, $data)
  {
    $this->db->insert($tabel, $data);
  }

  public function select($tabel)
  {
    $query = $this->db->get($tabel);
    return $query->result();
  }

  public function update($tabel, $data, $where)
  {
    $this->db->where($where);
    $this->db->update($tabel, $data);
  }

  public function delete($tabel, $where)
  {
    $this->db->where($where);
    $this->db->delete($tabel);
  }

  ####################################
  // 
  ####################################

  public function cek_jumlah($tabel, $id_transaksi)
  {
    return  $this->db->select('*')
      ->from($tabel)
      ->where('id_transaksi', $id_transaksi)
      ->get();
  }

  public function get_data_array($tabel, $id_transaksi)
  {
    $query = $this->db->select()
      ->from($tabel)
      ->where($id_transaksi)
      ->get();
    return $query->result_array();
  }

  public function get_data_tb($tabel, $id_transaksi)
  {
    $query = $this->db->select()
      ->from($tabel)
      ->where($id_transaksi)
      ->get();
    return $query->result();
  }



  public function mengurangi($tabel, $kode_genset, $stok_gd_new)
  {
    $this->db->set("stok_gd", $stok_gd_new);
    $this->db->where('kode_genset', $kode_genset);
    $this->db->update($tabel);
  }

  public function mengurangi_kembali($tabel, $kode_genset, $stok_pj_new)
  {
    $this->db->set("stok_pj", $stok_pj_new);
    $this->db->where('kode_genset', $kode_genset);
    $this->db->update($tabel);
  }

  public function menambah($tabel, $kode_genset, $stok_pj_new)
  {
    $this->db->set("stok_pj", $stok_pj_new);
    $this->db->where('kode_genset', $kode_genset);
    $this->db->update($tabel);
  }

  public function menambah_kembali($tabel, $kode_genset, $stok_gd_new)
  {
    $this->db->set("stok_gd", $stok_gd_new);
    $this->db->where('kode_genset', $kode_genset);
    $this->db->update($tabel);
  }

  public function update_status($tabel, $where, $status)
  {
    $this->db->set("status", $status);
    $this->db->where("id_transaksi", $where);
    $this->db->update($tabel);
  }
  public function update_status_aju($tabel, $where, $status_a)
  {
    $this->db->set("status_ajuan", $status_a);
    $this->db->where("id_transaksi", $where);
    $this->db->update($tabel);
  }

  public function update_password($tabel, $where, $data)
  {
    $this->db->where($where);
    $this->db->update($tabel, $data);
  }

  public function get_data_gambar($tabel, $username)
  {
    $query = $this->db->select()
      ->from($tabel)
      ->where('username_user', $username)
      ->get();
    return $query->result();
  }

  public function update_gambar($where, $data)
  {
    $this->db->set($data);
    $this->db->where($where);
    $this->db->update('tb_upload_gambar_user');
  }

  public function sum($tabel, $field)
  {
    $query = $this->db->select_sum($field)
      ->from($tabel)
      ->get();
    return $query->result();
  }

  public function numrows($tabel)
  {
    $query = $this->db->select()
      ->from($tabel)
      ->get();
    return $query->num_rows();
  }

  public function numrows_where($tabel, $where)
  {
    $query = $this->db->select()
      ->from($tabel)
      ->where($where)
      ->get();
    return $query->num_rows();
  }

  public function kecuali($tabel, $username)
  {
    $query = $this->db->select()
      ->from($tabel)
      ->where_not_in('username', $username)
      ->get();

    return $query->result();
  }
}
