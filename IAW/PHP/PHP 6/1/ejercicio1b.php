<?php 
session_start(); 
if(!empty($_SESSION['num1']) && !empty($_SESSION['string']) ) { 
    $num1 = $_SESSION['num1']; 
    $string =$_SESSION['string']; 
echo $num1;
echo '<br />'; 
echo $string;
} else { 
echo 'Todavía no has guardado una varible de sesión.'; 
} 
?> 