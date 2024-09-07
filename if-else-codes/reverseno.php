<?php

$r = $_REQUEST["number"];
while ($r > 0)
{
   $reverse =(int)($r%10);
   echo $reverse;
   $r=(int)($r/10);
}
?>
