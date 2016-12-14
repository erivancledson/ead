<h1>Duvida</h1>
<!--area do aluno portal adm-->


<table border="0" width="80%">
	<tr>
		<th>Data</th>
              
		<th width="80">Duvidas</th>
               
                <th width="80">Resposta</th>
		
	</tr>
	<?php foreach($duvidas as $duvida): ?>
	<tr>
		<td align="center"><?php echo $duvida['data_duvida']; ?></td>
               
		<td align="center"><?php echo $duvida['duvida']; ?></td>
               
                 <td align="center"><?php echo $duvida['resposta']; ?></td>
		
	</tr>
	<?php endforeach; ?>
</table>
