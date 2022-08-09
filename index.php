<?php 

if(isset($_SESSION)) {
	session_destroy();
}

header("location:/financement-non-remboursable/index.php");
?>