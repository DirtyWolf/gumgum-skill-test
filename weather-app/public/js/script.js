document.onreadystatechange = function() {
    if (document.readyState === 'complete') {
        
        document.getElementById('form-submit').onclick = function() {
        	
			var xmlHttp = new XMLHttpRequest();
			var url="app/ajax.php?";
			var parameters = "cities=";
			var list = document.querySelectorAll(".city-checkbox");
			for (var i = 0; i < list.length; i++ ) {
				if (list[i].checked){
					parameters = parameters + list[i].value + ","
				}
			}
			parameters = parameters.substring(0, parameters.length - 1);
			url = url + parameters;
			console.log(url);
			
			xmlHttp.open("GET", url, true);
			
			xmlHttp.onreadystatechange = function() {
				if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
					document.getElementById('message').innerHTML=xmlHttp.responseText;
				}
			}
			
			xmlHttp.send(parameters);
        	    
        	return false;
        }
        
    }
};