<?php
/**
 *
 */
class M_crud extends CI_Model
{

  public function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('tb_gambar');
      $query = $this->db->get();
      return $query->result();
  }
  public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('tb_gambar');

    return $query->num_rows();
  }



  public function get_by_id($kondisi)
  {
      $this->db->from('tb_gambar');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function insert($data)
  {
      $this->db->insert('tb_gambar',$data);
      return TRUE;
  }
  public function delete($where)
  {
      $this->db->where($where);
      $this->db->delete('tb_gambar');
      return TRUE;
  }
  public function update($data,$kondisi)
  {
      $this->db->update('tb_gambar',$data,$kondisi);
      return TRUE;
  }

}