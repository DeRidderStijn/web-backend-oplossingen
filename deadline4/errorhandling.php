<?php
    session_start();
    $errormessage ="";
    $isValid = FALSE;
    try
    {
        if ( isset( $_POST["submit"]))
        {
            if ( isset( $_POST["code"]) )
            {
                if ((strlen($_POST["code"])) == 8 )
                {
                    $isValid = TRUE;
                }
                else
                {
                    throw new Exception( "VALIDATION-CODE-LENGTH");
                }
            }
            else
            {
                throw new Exception( "SUBMIT-ERROR" );
            }
         }  
    }
    catch( Exception $e)
    {
        $messageCode = $e->getMessage();
        $message = array();
        $createMessage = FALSE;

        switch ($messageCode)
        {
            case "SUBMIT-ERROR":
                $message["type"] = "error";
                $message["text"] = "Er werd met het formulier geknoeid";

            case "VALIDATION-CODE-LENGTH":
                $message["type"] = "error";
                $message["text"] = "De kortingscode heeft niet de juiste lengte";
                $createMessage = TRUE;
        }
        if ($createMessage == TRUE)
        {
            createMessage($message);
        }
        logToFile($message);
        $errormessage = showMessage();
    }
    
    function logToFile($message)
    {
        $date           = date( 'H:i:s', time() );
        $ip             = $_SERVER['REMOTE_ADDR'];;
        $errorType      = $message["type"];
        $errorMessage   = $message["text"];
        $toLog          = "[" . $date . "] -" . $ip . " - type:[" . $errorType . "] " . $errorMessage . "\n\r";

        file_put_contents( 'error.log', $toLog, FILE_APPEND );
    }

    function createMessage($message)
    {
        $_SESSION[ 'message' ][ 'type' ]    = $message["type"];
        $_SESSION[ 'message' ][ 'message' ] = $message["text"];
    }

    function showMessage()
    {
        if(isset($_SESSION['message']))
        {
        $type = $_SESSION['message']['type'];
        $message = $_SESSION['message']['message'];
        unset($_SESSION['message']);
        return $type . ' ' . $message;
        }
        else
        {
            return FALSE;
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Error handling</title>
</head>

<body>
    <form action="errorhandling.php" method="POST">
        <?php echo $errormessage ;?>
        <h1>Geef uw kortingscode op </h1>
        <label>kortingscode</label><br>
        <input type="text" id="code" name="code"><br>
        <input type="submit" id="submit" name="submit">
    </form>

</body>
</html>