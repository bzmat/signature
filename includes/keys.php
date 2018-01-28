<?php 

$config = array(
		'private_key_bits' => '4096',
		'private_key_type' => OPENSSL_KEYTYPE_RSA);

$priv_key = openssl_pkey_new($config);

$details = openssl_pkey_get_details($priv_key);

$publ_key = openssl_pkey_get_public($details['key']);


 ?>