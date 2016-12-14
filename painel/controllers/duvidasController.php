<?php  

class duvidasController extends controller {
public function __construct() {
        parent::__construct();
        $usuarios = new Usuarios();

        if(!$usuarios->isLogged()) {
            header("Location: ".BASE."login");
        }
    }
       
       
        public function index() {
        $dados = array(
            'duvidas' => array()
        );
                //pegando os dados dos alunos
        $duvidas = new Duvidas();
        $dados['duvidas'] = $duvidas->getDuvidas();
               
        $this->loadTemplate('duvidas', $dados);
    }
       
       
            public function editar($id) {
        $dados = array(
            'duvidas' => array(),
           
        );

        $duvidas = new Duvidas();
         //$dados['duvidas'] = $duvidas;
        if(isset($_POST['duvida']) && !empty($_POST['duvida'])) {
            
            $respondida = addslashes($_POST['respondida']);
           $duvida = addslashes($_POST['duvida']);
           
            $resposta = $_POST['resposta'];
            
     

            $duvidas->updateDuvida($id,  $respondida, $duvida,  $resposta);
        }
              
            $dados['duvidas'] = $duvidas->getduvida($id);       
        $this->loadTemplate('duvidas_edit', $dados);
    }
}