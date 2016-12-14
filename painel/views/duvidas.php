<h1>Duvidas</h1>
<!--area do aluno portal adm-->


<table border="0" width="100%">
	<tr>
		<th>Data</th>
                <th width="80">Respondida</th>
		<th width="80">Duvidas</th>
                <th width="80">Aluno</th>
                <th width="80">Resposta</th>
		<th>Ações</th>
	</tr>
	<?php foreach($duvidas as $duvida): ?>
	<tr>
		<td align="center"><?php echo $duvida['data_duvida']; ?></td>
                <td align="center"><?php echo $duvida['respondida']; ?></td>
		<td align="center"><?php echo $duvida['duvida']; ?></td>
                 <td align="center"><?php echo $duvida['id_aluno']; ?></td>
                 <td align="center"><?php echo $duvida['resposta']; ?></td>
		<td width="200">
			<a href="<?php echo BASE; ?>duvidas/editar/<?php echo $duvida['id']; ?>">Responder</a> 
		</td>
	</tr>
	<?php endforeach; ?>
</table>


