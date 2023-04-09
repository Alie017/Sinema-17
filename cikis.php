<?php
ob_start(); 
session_start();
session_destroy(); 
echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
ob_end_flush(); 
?>