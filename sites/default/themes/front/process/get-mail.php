<?php

$date= protect($_GET['date']);
$jusque= protect($_GET['jusque']);
$gite= protect($_GET['gite']);



/* à rajouter en js dans le webform  soit en json soit avec une balise php ouverte dans la balise script */

if (isset($date)) && (isset($jusque)) && (isset($gite)){

	$string = "Bonjour, <br/> Je souhaite réserver ". $gite . "pour la période du " . $date . " au ". $jusque ". Pourriez-vous consulter la disponibilité du gîte et me donner plus d'informations. Merci. ";
}

?>

<script>  
jQuery(function({


}))

</script>

