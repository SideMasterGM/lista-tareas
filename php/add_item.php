<?php
	#Author: Jerson A. Martínez M. (Side Master).
	
	if (isset($_POST['tareaInput'])){
		include ("connect_server/connect_server.php");

		$Query = "INSERT INTO task (id, task) VALUES ('','".$_POST['tareaInput']."');";
		if (!$MySQLi->query($Query)){
			?>
				<script type="text/javascript">
					alert("Ha ocurrido un problema al agregar la tarea!.");
					window.location.href="../";
				</script>
			<?php
		}
		header("Location: ../");
	} else {
		?>
			<script type="text/javascript">
				alert("No haga saltos entre las URL!.");
				window.location.href="../";
			</script>
		<?php
	}

?>