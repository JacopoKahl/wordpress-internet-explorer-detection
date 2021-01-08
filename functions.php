<?php

add_action('wp_head','ie_explorer', 20);
function ie_explorer() {
?>
<!-- Se l'utente utilizza Internet Explorer lo invita ad aggiornare il browser -->
<script> 
	var $buoop = {required:{e:-4}, reminder: 0, text: "Questo sito non supporta Internet Explorer. La preghiamo di effettuare gli ordini attraverso un altro browser (ad es. Chrome, Safari o Edge)", noclose:true, insecure:true, style:"corner",api:2021.01 }; 
	function $buo_f(){ 
		var e = document.createElement("script"); 
		e.src = "//browser-update.org/update.min.js"; 
		document.body.appendChild(e);
	};
	try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
	catch(e){window.attachEvent("onload", $buo_f)}
</script>

<?php
}
