<?php

$recievedJwt = 'eyJhbGciOiAiSFMyNTYiLCJ0eXAiOiAiSldUIn0=.eyJjb3VudHJ5IjogIlJvbWFuaWEiLCJuYW1lIjogIk9jdGF2aWEgQW5naGVsIiwiZW1haWwiOiAib2N0YXZpYWFuZ2hlbEBnbWFpbC5jb20ifQ==.gbB+B063g+kwsoc4L3B1Bu2wM+VEBElwPiLOb0fj2SE=';

$secret_key = 'Octaviasecretkey';

// Split a string by '.' 
$jwt_values = explode('.', $recievedJwt);

// extracting the signature from the original JWT 
$recieved_signature = $jwt_values[2];

// concatenating the first two arguments of the $jwt_values array, representing the header and the payload
$recievedHeaderAndPayload = $jwt_values[0] . '.' . $jwt_values[1];

// creating the Base 64 encoded new signature generated by applying the HMAC method to the concatenated header and payload values
$resultedsignature = base64_encode(hash_hmac('sha256', $recievedHeaderAndPayload, $secret_key, true));

// checking if the created signature is equal to the received signature
if($resultedsignature == $recieved_signature) {

	// If everything worked fine, if the signature is ok and the payload was not modified you should get a success message
	echo "Success";
}
?> 