<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'sonidosdelcoqui.com' // Put you mail domain here
	, 
	'Contact Form' // Put your site name / form name here
	, 
	'christie.kosal@gmail.com' // Where will the form notification be sent?
	, 
	'christie.kosal@gmail.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field
	
);


?>

<!-- HTML bottom code goes here -->