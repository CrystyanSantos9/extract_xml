
<?php

libxml_disable_entity_loader(false);
 session_start();
	echo '<link rel="stylesheet type="text/css" href="folha.css"/>';

 
 
 echo '
 <div id="main_page">
	<div id="form">
		<form action="processa.php" method="post" ENCTYPE = “multipart/form-data”>
			<fieldset>
				<legend>Campo Xml</legend>
				<input name="arquivos[]" type="file" multiple="multiple"/>
				
				<input type="submit" value="Enviar arquivo">
			</fieldset>
			
		</form>
	</div>
 </div>
	
';



 
?>

