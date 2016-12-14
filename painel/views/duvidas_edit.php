<h1>Responder Duvidas</h1>

<form method="POST">
        Respondida:<br/>
    <input type="text" name="respondida" value="<?php echo $duvidas['respondida']; ?>" /><br/><br/>
       
    Duvida:<br/>
    <input type="text" name="duvida" value="<?php echo $duvidas['duvida']; ?>" /><br/><br/>

    Resposta:<br/>
    <input type="text" name="resposta" value="<?php echo $duvidas['resposta']; ?>" /><br/><br/>



    <input type="submit" value="Salvar" />

</form>