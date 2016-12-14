<h1>Editar Aluno</h1>
<!--aqui o aluno edita dentro da sua area de estudante -->
<form method="POST">

	Nome do aluno:<br/>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

	<strong>E-mail:</strong><br/>
		<?php echo $info['email']; ?>
<br/><br/>
	Senha do aluno:<br/>
	<input type="password" name="senha"  /><br/><br/>



	<input type="submit" value="Salvar" />

</form>


