<?php
sesion_start();
unset($_SESSION['usuario_logado']);
session_destroy();
header('Location: index.php');