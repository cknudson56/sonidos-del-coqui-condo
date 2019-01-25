<?PHP
######################################################
#                                                    #
#             Forms To Go Lite  4.5.4                #
#             http://www.bebosoft.com/               #
#                                                    #
######################################################







error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('track_errors', true);

function DoStripSlashes($fieldValue)  { 
// temporary fix for PHP6 compatibility - magic quotes deprecated in PHP6
 if ( function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc() ) { 
  if (is_array($fieldValue) ) { 
   return array_map('DoStripSlashes', $fieldValue); 
  } else { 
   return trim(stripslashes($fieldValue)); 
  } 
 } else { 
  return $fieldValue; 
 } 
}

function FilterCChars($theString) {
 return preg_replace('/[\x00-\x1F]/', '', $theString);
}



if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
 $clientIP = $_SERVER['REMOTE_ADDR'];
}

$FTGname = DoStripSlashes( $_POST['name'] );
$FTGemail = DoStripSlashes( $_POST['email'] );
$FTGusrtel = DoStripSlashes( $_POST['usrtel'] );
$FTGdatearrival = DoStripSlashes( $_POST['datearrival'] );
$FTGdatedepart = DoStripSlashes( $_POST['datedepart'] );
$FTGsubject = DoStripSlashes( $_POST['subject'] );
$FTGsubmit = DoStripSlashes( $_POST['submit'] );



$validationFailed = false;


# Redirect user to the error page

if ($validationFailed === true) {

 header("Location: http://www.sonidosdelcoqui.com/contact-error.html");

}

if ( $validationFailed === false ) {

 # Email to Form Owner
  
 $emailSubject = FilterCChars("Condo Contact");
  
 $emailBody = "name : $FTGname\n"
  . "email : $FTGemail\n"
  . "usrtel : $FTGusrtel\n"
  . "datearrival : $FTGdatearrival\n"
  . "datedepart : $FTGdatedepart\n"
  . "subject : $FTGsubject\n"
  . "submit : $FTGsubmit\n"
  . "";
  $emailTo = 'Webmaster <christie.kosal@gmail.com>,Owner <t.wendt@comcast.net>';
   
  $emailFrom = FilterCChars("christie.kosal@gmail.com");
   
  $emailHeader = "From: $emailFrom\n"
   . "MIME-Version: 1.0\n"
   . "Content-type: text/plain; charset=\"UTF-8\"\n"
   . "Content-transfer-encoding: 8bit\n";
   
  mail($emailTo, $emailSubject, $emailBody, $emailHeader);
  
  
# Redirect user to success page

header("Location: http://www.sonidosdelcoqui.com/contact-success.html");

}

?>