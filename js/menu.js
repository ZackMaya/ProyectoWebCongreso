
/*Menu auto ocultable
Para cada contenedor se oculta su contraparte....un tipo de menu 
como frame, pero con CSS y Javascript*/

		function mostrarpresentacion(){
		document.getElementById('presentacion').style.display = 'block';
		document.getElementById('informacion').style.display='none';
		document.getElementById('arduino').style.display='none';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}


		function mostrararduino(){
		document.getElementById('arduino').style.display='block';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('informacion').style.display='none';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}


		function mostrarinformacion(){
		document.getElementById('informacion').style.display='block';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('impresion').style.display='none';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('arduino').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}

		function mostrarimpresiones(){
		document.getElementById('impresion').style.display='block';
		document.getElementById('informacion').style.display='none';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('arduino').style.display='none';
		document.getElementById('inteligencia').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}

		function mostrarinteligencia(){
		document.getElementById('inteligencia').style.display='block';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('informacion').style.display='none';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('arduino').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}

		function mostrarbreak(){
		document.getElementById('break').style.display='block';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('informacion').style.display='none';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('arduino').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}

		function mostrarbatalla(){
		document.getElementById('batalla').style.display='block';
		document.getElementById('break').style.display='none';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('informacion').style.display='none';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('arduino').style.display='none';
		document.getElementById('networking').style.display='none';
		document.getElementById('cierre').style.display='none';}

		function mostrarnetworking(){
		document.getElementById('networking').style.display='block';
		document.getElementById('batalla').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('informacion').style.display='none';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('arduino').style.display='none';
		document.getElementById('cierre').style.display='none';}

		function mostrarcierre(){
		document.getElementById('cierre').style.display='block';
		document.getElementById('networking').style.display='none';
		document.getElementById('batalla').style.display='none';
		document.getElementById('break').style.display='none';
		document.getElementById('inteligencia').style.display='none';	
		document.getElementById('impresion').style.display='none';
		document.getElementById('informacion').style.display='none';
		document.getElementById('presentacion').style.display = 'none';
		document.getElementById('arduino').style.display='none';}
