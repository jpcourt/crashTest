function getJSONFile(){
	var xhr = new XMLHttpRequest();
	xhr.open('GET','jsonTestFile.json');
	xhr.onreadystatechange = function(aEvt) {
		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				document.getElementById('renderZone').innerHTML = displayTable(JSON.response);
			}
		}
	}
	xhr.send();
}