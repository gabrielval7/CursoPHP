<h2>$_POST</h2>


<form action="#" method="post">
	<input type="text" name="nome">
	<input type="text" name="sobrenome">
	<select name="estado">
		<option>SP</option>
		<option>RJ</option>
		<option>MG</option>
	</select>
	<button>Enviar</button>
</form>

<?php
	echo $_POST;
	echo '<br>';
	print_r($_POST);
	
?>