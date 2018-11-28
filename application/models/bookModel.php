<?php
class bookModel extends CI_Model{

        public function getBookInfo(){
            $queryData = $this->db->query('SELECT price,image from book  WHERE nic=1 ');
            return $queryData;
        }
}

?>