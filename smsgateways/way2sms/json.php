<?php

//$data = "{'status':true,'msg':'Message Sent Successfully. id=7422CE34681E3B552B95F8E84C2D1437'}";

$data = '{
	"status": false,
	"msg": "Message Sent Successfully. id=7422CE34681E3B552B95F8E84C2D1437"
}';

$character = json_decode($data);
echo $character->status;
?>