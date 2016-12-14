<?php

class Duvidas extends model {

   
    public function getDuvidas() {
        $array = array();

        $sql = "SELECT * FROM duvidas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

            public function getDuvida($id) {
        $array = array();

        $sql = "SELECT * FROM duvidas WHERE id = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }
       
        public function updateDuvida($id,  $respondida, $duvida,  $resposta) {
        $this->db->query("UPDATE duvidas SET  respondida = '$respondida', duvida = '$duvida', resposta = '$resposta' WHERE id = '$id'");
               
        }
     
}