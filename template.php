<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>leads</title>

<script src='js/utils.js'></script>
<script src='js/load10.js'></script>
<script src='js/win_onload.js'></script>
<script>
	var G_INIT_LEADS = <?php 
		echo($G_BIGLA_JSON); 
	?>;
</script>

<?php 
	users::echoJS(); 
?>

</head>
<body>
	
	<table>
		<thead>
			<tr><th>url</th><th>Y</th><th>FUP</th><th>N</th><th>notes</th></tr>
		</thead>
		<tbody id='tbody10'>
			
		</tbody>
		
	</table>
	
</body>
</html>
