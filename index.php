<?
include("header.php");
$p = $_GET['p'];
if (isset($p))
{
    $p.=".php";
    include("$p");
}else{
    include("home.php");
}
include("footer.php");
?>