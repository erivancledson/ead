<?php
class alunoController extends controller {
    
    	public function __construct() {
		parent::__construct();
		$alunos = new Alunos();

		if(!$alunos->isLogged()) {
			header("Location: ".BASE."login");
		}
	}
        
        
        
  


        
public function editar() {
		$dados = array(
			'aluno' => array(),
		
		);

		$alunos = new Alunos();
                $alunos->setAluno($_SESSION['lgaluno']);
                $dados['info'] = $alunos;
		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			
			$senha = md5($_POST['senha']);
			

			 $alunos->updatePerfil(array(
                        'nome' => $nome,
                         'senha' => $senha
            ));
		}
            $dados['aluno'] = $alunos->getNome($_SESSION['lgaluno']);
        
        //editar perfil
         //pegar as informações do model getDados
        $dados['info'] = $alunos->getAluno($_SESSION['lgaluno']);
        //envio para a view perfil
         //editar perfil

		$this->loadTemplate('aluno_edit', $dados);
	}
        
}