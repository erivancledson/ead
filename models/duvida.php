<?php
class Duvida extends model {
    public function getDuvida() {
		$array = array();

		$sql = "SELECT * FROM duvidas ";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
        
}