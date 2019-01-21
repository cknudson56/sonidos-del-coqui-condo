<style>
nav ul li {
	text-align: left;
	margin: 20px 20px;
	font-size: 1.5rem;
}
#contact_form {
	font-family: 'Open Sans', sans-serif;
	text-align: center;
	background-color: #F98857;
	margin-top: 50px;
}
</style>






<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
	<section id="contact_form">
		<h1>Missing fields</h1>
		<p>Sorry, you have not completed all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

		<ul>
		<?php
			for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
		?>
		</ul>

		<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
	</section>