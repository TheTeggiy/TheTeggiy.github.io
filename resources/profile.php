<?php
$count = 0;
session_start();

$log = $_POST['log'];
$pass = $_POST['pass'];
$_POST['log']=null;
$_POST['pass']=null;
$l = "Olesha";
$p = "40024";

if( $log == $l && $pass == $p )
{


$_SESSION['count'] = 1;
header('Location: ./home/index.php');

}

else
{
$_SESSION['count'] = 0;
header('Location: ./twoindex.php',true,302);
echo "<center> абасрыха(";
}