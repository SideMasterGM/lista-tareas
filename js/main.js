window.onload = function(){
	document.getElementById("btn-agregar").onclick = EventOnclick;
}

function EventOnclick(){
	var tareaInput = document.getElementById("tareaInput");
	if (tareaInput.value == ""){
		tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
		tareaInput.className = "error";
		return false;
	} else {
		document.getElementById("firstForm").submit();
	}
}

function DeleteItem(value){
	document.getElementById("FormNum" + value).submit();
}