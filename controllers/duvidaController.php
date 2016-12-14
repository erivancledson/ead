<?php

class duvidaController extends controller {

	public function __construct() {
		parent::__construct();
		$alunos = new Alunos();

		if(!$alunos->isLogged()) {
			header("Location: ".BASE."login");
		}
	}
        
        
        public function listarDuvidar() {
		$dados = array(
			'duvidas' => array()
		);
                //pegando os dados dos alunos
		$duvida = new Duvida();
		$dados['duvida'] = $duvida->getDuvida();
                
		$this->loadTemplate('duvida', $dados);
	}
        
        
        
}
