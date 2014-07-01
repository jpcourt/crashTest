var theResponse;

function getJSONFile(){
	var xhr = new XMLHttpRequest();
	xhr.open('GET','jsonTestFile.json');
	xhr.onreadystatechange = function(aEvt) {
		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				theResponse = xhr.response;
				console.log(xhr.response);
				document.getElementById('renderZone').innerHTML = JSON.responseText;
			}
		}
	}
	xhr.send();
}