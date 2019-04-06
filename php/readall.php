<?php

include "config.php";
$base=connect();
$req="SELECT * FROM utilsateur ";
$result=$base->query($req);
while($user=$result->fetchObject())
{
echo $user->Nom." ".$user->m." ".$user->text;



}



?>
