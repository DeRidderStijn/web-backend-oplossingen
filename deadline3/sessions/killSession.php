<?php
/*
Stijn De Ridder
stijn.deridder.1@student.kdg.be
*/
session_start(); /*code to kill session*/
if ( isset( $_GET['session'] ) )
{
    if ( $_GET['session']  == 'destroy' )
    {
        session_destroy( );
        header( 'location: killSession.php' );
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Oplossing cookie: deel1</title>
	<style>
	
	</style>
</head>
<body>
<h1>your session has been killed! </h1>
<p><a href="registratiegegevens.php"><input type="button" value="go back"></a></p>
	
</body>
</html>