<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['ID_USER'])) {
    //die("Acesso negado Faça login para continuar.<p><a href="/login/">Entrar</a></p>");
  echo '<script>window.location.href = "/log-in"</script>';
}


?>