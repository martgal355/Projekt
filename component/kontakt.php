<!doctype html>
<html lang="en">

  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 

  </head>
  <body>
   


            <!--- kontakt --->
            <div id="Kontakt">

</br>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row">
<div class="container space-4">
	<div class="containform">
	  <div class="card-body">
		<div class="text-center"><i class="fas fa-envelope icosize"></i></div>
			<h4 class="text-center"> Skontaktuj się z nami </h4>
			</br>
			<form id="contactform" action="email.php" method="post">
			
			<div class="form-group">
				<div class="row">
					<div class="col">
					  <label for="contact_fname">Imię</label>
					  <input type="text" name="fname" class="form-control" id="contact_fname" aria-describedby="emailHelp" placeholder="Podaj imię" required>
					</div>
					<div class="col">
					  <label for="contact_lname">Nazwisko</label>
					  <input type="text" name="lname" class="form-control" id="contact_lname" aria-describedby="emailHelp" placeholder="Podaj nazwisko" required>
					</div>
				 </div>
			</div>
			
			  <div class="form-group">
				<label for="contact_email">Email</label>
				<input type="email" name="email" class="form-control" id="contact_email" aria-describedby="emailHelp" placeholder="Podaj e-mail" required>
			  </div>
			  
			  <div class="form-group">
				<label for="contact_subject">Temat wiadomości</label>
				<input type="text" name="subject" class="form-control" id="contact_subject"  placeholder="Podaj temat wiadomości" required>
			  </div>

			  <div class="form-group">
				<label for="contact_message">Treść</label>
				<textarea rows="4" class="form-control" name="message" id="contact_message" placeholder="Wpisz treść maila" required></textarea>
			  </div>
			<div class="text-center">
            </br>
			  <button type="submit" class="btn btn-dark btn-lg btn-block" >Wyślij</button>
              
			</div>
</div>
			</form>
	  </div>
	</div>
</div>


</br>



</div>
</div>
</div>




  </body>
</html>





