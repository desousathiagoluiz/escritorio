<?php 
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* Define o prazo do cache em 120 minutos */
session_cache_expire(120);
$cache_expire = session_cache_expire();
/* Inicia a sessão */

@session_start();

if(@$_SESSION['id_usuario'] == ""){
	echo "<script>window.location='../index.php'</script>";
exit();
}

?>
