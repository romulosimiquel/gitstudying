<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Aula 02</title>
</head>
<body>
	<pre>
    <?php
        require_once 'Conta.php';
        $p1 = new Conta;
        $p1 -> abrirConta ("CP");
        $p1 -> setDono ("Juca");
        $p1 -> setnumConta ("1111");
        $p1 -> pagarMensal ();
        $p1 -> depositar (1000);
        $p1 -> sacar (1120);
        $p1 -> sacar (50);
        $p1 -> fecharConta ();
        $p1 -> sacar (10);
        $p1 -> pagarMensal ();
        $p1 -> fecharConta ();
        print_r($p1);
        
	?>
	</pre>
</body>
</html>
 