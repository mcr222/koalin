var button_add = document.getElementById("add_koalin");
button_add.addEventListener("click",addRow);

var content_table = document.getElementById("content_table");

var text = document.getElementById("text_to_add");

function addRow() {
	if(text.value!="") {
		var row = content_table.insertRow(-1);
		var cell = row.insertCell();
		cell.innerHTML = text.value;
		text.value=""
	}

}