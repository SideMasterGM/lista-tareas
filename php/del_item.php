<?php
	#Author: Jerson A. Martínez M. (Side Master).

	if (isset($_POST['id'])){
		include ("connect_server/connect_server.php");
		
		$Query = "DELETE FROM task WHERE id='".$_POST['id']."';";
		if (!$MySQLi->query($Query)){
			?>
				<script type="text/javascript">
					alert("Ha ocurrido un problema al eliminar la tarea!.");
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