var theResponse;

function getJSONFile(){
	var xhr = new XMLHttpRequest();
	xhr.open('GET','data/jsonWriteTestFile.json');
	xhr.onreadystatechange = function(aEvt) {
		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				theResponse = xhr.response;
				console.log(theResponse);
				document.getElementById('renderZone').innerHTML = JSON.parse(theResponse);
			}
		}
	}
	xhr.send();
}