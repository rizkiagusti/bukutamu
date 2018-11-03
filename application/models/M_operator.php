<?php
class M_operator extends CI_Model{


    public function tampilOperator()
    {
        $this->db->select("*");
        $this->db->FROM("akseslogin");
        return $this->db->get()->result();
    }

    function hapus($idAkses){
        $this->db->where('idAkses', $idAkses);
        $this->db->delete('akseslogin');        
    }


}
?>