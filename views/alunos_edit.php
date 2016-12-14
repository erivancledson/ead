<h1>Editar informações</h1>

<form method="POST">

	Nome do aluno:<br/>
	<input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" /><br/><br/>

	E-mail do aluno:<br/>
	<input type="email" name="email" value="<?php echo $aluno['email']; ?>" /><br/><br/>

	Senha do aluno:<br/>
	<input type="password" name="senha" value="<?php echo $aluno['senha']; ?>" /><br/><br/>

	

	<input type="submit" value="Salvar" />

</form>