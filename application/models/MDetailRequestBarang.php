<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class MDetailRequestBarang extends CI_Model
{
    private $tbl = 'inv_detail_request';
    private $view = 'v_detail_request';

    public function show($where='')
    {
        $this->db->select('*');
        $this->db->from($this->view);
        if (@$where && $where != null) {
            $this->db->where($where);
        }
        $this->db->order_by('id_detail_request', 'asc');
        return $this->db->get();
    }

    public function insert($object)
    {
        $this->db->insert($this->tbl, $object);
        return(($this->db->affected_rows() > 0) ? true : false);
    }

    public function update($where, $object)
    {
        $this->db->where($where);
        $this->db->update($this->tbl, $object);
        return(($this->db->affected_rows() > 0) ? true : false);
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete($this->tbl);
        return(($this->db->affected_rows() > 0) ? true : false);
    }
}
?>