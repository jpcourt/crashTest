function callSqliteTest(){
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'sqlite_test.php');
	xhr.onreadystatechange = function(aEvt) {
		if (xhr.readyState == 4) {
			if (xhr.status == 200) {
				console.log(xhr.response);
				document.getElementById('test').innerHTML = xhr.response;
			}
		}
	}
	xhr.send();	
}