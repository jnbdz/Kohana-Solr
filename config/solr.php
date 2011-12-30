<?php defined('SYSPATH') or die('No direct script access.');

/**
 * secure          (Boolean value indicating whether or not to connect in secure mode)
 * hostname        (The hostname for the Solr server)
 * port            (The port number)
 * path            (The path to solr)
 * wt              (The name of the response writer e.g. xml, phpnative)
 * login           (The username used for HTTP Authentication, if any)
 * password        (The HTTP Authentication password)
 * proxy_host      (The hostname for the proxy server, if any)
 * proxy_port      (The proxy port)
 * proxy_login     (The proxy username)
 * proxy_password  (The proxy password)
 * timeout         (This is maximum time in seconds allowed for the http data transfer operation. Default is 30 seconds)
 * ssl_cert        (File name to a PEM-formatted file containing the private key + private certificate (concatenated in that order) )
 * ssl_key         (File name to a PEM-formatted private key file only)
 * ssl_keypassword (Password for private key)
 * ssl_cainfo      (Name of file holding one or more CA certificates to verify peer with)
 * ssl_capath      (Name of directory holding multiple CA certificates to verify peer with )
 **/


return array(
	'hostname' => '',
	'secure' => '',
	'port' => '',
	'login' => '',
	'password' => '',
	'timeout' => 10,
	'ssl_cert' => '',
	'ssl_cert_only' => '',
	'ssl_key' => '',
	'ssl_keypassword' => '',
	'ssl_cainfo' => '',
	'ssl_capath' => '',
);
