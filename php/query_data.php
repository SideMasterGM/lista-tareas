<?php
	#Author: Jerson A. Martínez M. (Side Master).
	
	include ("php/connect_server/connect_server.php");

	$Query = "SELECT * FROM task;";
	$Result = $MySQLi->query($Query); $cont = 0;
	while ($row = $Result->fetch_array(MYSQL_ASSOC)){
		?>
			<form id="FormNum<?php echo $row['id']; ?>" action="php/del_item.php" method="post">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
				<li onclick="DeleteItem(<?php echo $row['id']; ?>)"><a href="#"><?php echo $row['task']; ?></a></li>
			</form>
		<?php
		$cont++;
	}

	if ($cont == 0)
		echo "No se ha registrado ninguna tarea!.";

?>