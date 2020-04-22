<?php


if ($_POST['submit']) {
	
	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$results='<div class="alert alert-danger" role="alert"><strong>Sorry, there is an error.</strong> Please correct the following: '.$error.' </div';
	} else {
		mail("carolecarper@gmail.com.com", "Contact message", "Name: ".$_POST['name'].
			"Email: ".$_POST['email'].
			"Message: ".$_POST['message']);
		{
		$results='<div class="alert alert-success" role="alert"><stron>Thank you! We will get back in touch with you shortly.</div>';	
		}
	}
}
		   

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://kit.fontawesome.com/c5bb0e9542.js" crossorigin="anonymous"></script>

<title>Contact Us</title>
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
<div class="container">
  <a class="navbar-brand" href="index.html">
      <i class="fas fa-home"></i>
    </a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="history.html">HISTORY <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.html">SERVICES</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUCTS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="economy_line.html">Economy Line</a>
          <a class="dropdown-item" href="low_end.html">Low End</a>
          <a class="dropdown-item" href="min_metals.html">Minimum Metals</a>
          <a class="dropdown-item" href="twenty_gauge.html">20 Gauge Sealers</a>
          <a class="dropdown-item" href="eighteen_gauge.html">18 Gauge Sealers</a>
          <a class="dropdown-item" href="specialty.html">Specialty</a>
          <a class="dropdown-item" href="oversize.html">Oversize</a>
          <a class="dropdown-item" href="youth.html">Youth</a>
        </div>
      </li>
    </ul>
      
    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i>&nbsp;CONTACT US</a>
      </li>
    </ul>
  </div>
</div>
</nav>
    
	<section id="contact">
		<div class="container">
		
			<div class="row">
				
				<div class="col-md-12 mb-lg-4 text-center">
                    
                    <div><h1 class="about1 ">CONTACT US</h1></div>
					
					<?php echo $results;?>
					
					<center>
						<h2><strong>Questions and comments are welcome.</strong></h2>
					</center>
					
					<form method="post" role="form">
						
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
						</div>
						
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
						</div>
						
						<div class="form-group">
							<textarea name="message" rows="8" class="form-control" placeholder="Message..."><?php echo $_POST['message']; ?></textarea>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox" name="check"> I am human
							</label>
						</div>
						
						<div align="center">
							<input type="submit" name="submit" class="btn btn-default" value="send message"/>
						</div>
						
					</form>
						  
				</div>
                
			</div>
		
		
		</div>
	</section>
	
    <div>
         <h3 class="address2">3204 Samuel Shepard Dr<br>Saint Louis, MO 63103<br>Tel: (314)531-6757</h3><br>
    </div>
	
	<div class="container">
		<center>
			<img class="social2" src="img/carper_logo_3.png" width="225px" height="auto" alt="carper casket logo"/>
		</center>
	</div><br><br><br><br>
	
	
	 <div class="footer">
        <h3 id="footmenu">
            <a href="index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="history.html">HISTORY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="services.html">SERVICES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="catalog.html">PRODUCTS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">CONTACT US</a>
        </h3><br>
        
        <h3 class="address">3204 Samuel Shepard Dr • Saint Louis, MO 63103 <br>Tel: (314)531-6757 <br><br>
            <p>© Copyright 2020, Carper Casket Company. All Rights Reserved.</p><br><br>
            <p>Web Design by Sonicpress</p>
        </h3>
    </div>
	
	
</body>
</html>



