<?php 
foreach($cats as $t){
	?> <li> <?php echo $t->nome . ' - ' . $t->id; ?> </li> <?php
}
?>