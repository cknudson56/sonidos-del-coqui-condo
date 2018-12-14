<style>
@import url("https://fonts.googleapis.com/css?family=Lily+Script+One|Montserrat:400,400i,500,500i,600,600i,700,700i|Open+Sans:400,400i,600,600i");.link-button{padding:5px;border-radius:10px;border:4px solid #F98857;width:200px;margin:auto;text-align:center;color:#F98857;font-family:"Montserrat",sans-serif;font-size:1.2rem}*{margin:0;padding:0;border:0}article,aside,details,figcaption,figure,footer,header,main,nav,section,summary{display:block}h1{font-family:"Lily Script One",cursive;text-align:center}h2,h3,h4,h5,h6{font-family:"Montserrat",sans-serif}p,li,a{font-family:"Open Sans",sans-serif;text-decoration:none;color:#000}nav{display:flex;justify-content:space-between}nav img{width:200px;height:120px;position:absolute}nav #menu-bar{list-style-type:none;display:flex;justify-content:space-around;padding-top:40px;width:70%}nav #menu-bar li a{display:flex;flex-wrap:wrap;text-align:center;width:126px;-webkit-transition:color 0.3s ease;-moz-transition:color 0.3s ease;transition:color 0.3s ease}nav #menu-bar a:hover{color:#84DCC6}header{height:400px;background-color:#F98857;margin-top:40px}main h1{padding:40px 0 40px 0;width:450px;margin:auto;color:#028090}main p{text-align:center;padding:10px 10% 10px 10%}main .link-button{margin-top:40px;margin-bottom:50px}#home-highlights{height:600px;background-color:#8DBAA1;margin-bottom:40px}footer{background-color:#028090}footer ul,footer p{text-align:center}footer ul{list-style-type:none;padding-top:15px}footer ul li{display:inline;font-family:"Montserrat",sans-serif;font-size:1.2rem;padding:2%}footer ul a{color:#F98857;text-decoration:none;-webkit-transition:color 0.3s ease;-moz-transition:color 0.3s ease;transition:color 0.3s ease}footer ul a:hover{color:#fff}footer #logo-font{display:flex;justify-content:center;flex-wrap:wrap}footer #logo-font h2{color:#fff;padding:8px 5px 15px 5px}footer #logo-font .sub-logo1{font-family:"Lily Script One",cursive;font-weight:normal;font-size:1.7rem}footer #logo-font .sub-logo2{font-family:"Montserrat",sans-serif;align-self:center}footer p{color:#F98857;padding-bottom:15px;font-size:0.8rem}footer p a{color:#F98857;-webkit-transition:color 0.3s ease;-moz-transition:color 0.3s ease;transition:color 0.3s ease}footer p a:hover{color:#fff}#landing-header img{width:300px;display:block;padding-top:20px;margin:auto}#landing-page{margin-bottom:30px}#landing-page h1{color:#028090;padding-top:50px;width:300px;font-size:1.6rem;margin:auto}@media (min-width: 500px){#landing-page h1{font-size:2rem;width:450px}}#landing-page p{text-align:center;padding:20px 10%;max-width:650px;margin:auto}@media (min-width: 500px){#landing-page p{font-size:1.2rem}}#communication{margin-top:80px;padding-bottom:50px;background-color:#84DCC6}#communication .availability{padding-top:40px;padding-bottom:100px;height:500px;margin:auto;width:300px;font-family:"Montserrat",sans-serif;text-align:center}#communication .availability h2{padding-bottom:20px}#communication .container{font-family:"Open Sans",sans-serif;border-radius:5px;background-color:#BCF8EC;padding:20px;width:80%;margin:auto;display:flex;justify-content:space-around;flex-wrap:wrap}#communication .container h2{width:100%;text-align:center;padding:40px 0 40px 0}#communication .container #us{width:250px;height:100%;padding-bottom:40px}#communication .container form{width:260px;padding-bottom:40px}@media (min-width: 650px) and (max-width: 749px){#communication .container form{padding-left:10px}}@media (min-width: 750px){#communication .container form{width:500px}}#communication .container input[type=text],#communication .container input[type=email],#communication .container input[type=tel],#communication .container select,#communication .container textarea{width:260px;padding:12px;border:1px solid #ccc;border-radius:4px;box-sizing:border-box;margin-top:6px;margin-bottom:16px;resize:vertical}@media (min-width: 750px){#communication .container input[type=text],#communication .container input[type=email],#communication .container input[type=tel],#communication .container select,#communication .container textarea{width:500px}}#communication .container input[type=submit]{background-color:#028090;color:white;padding:12px 20px;border:none;border-radius:4px;cursor:pointer}#communication .container input[type=submit]:hover{background-color:#84DCC6}

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