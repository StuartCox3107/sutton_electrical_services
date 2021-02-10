<?php 
if(isset($_POST['submit'])){
    $to = "coxstuart@hotmail.com.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Email = "Email";
    $Phone = "Phone";
    $Message = "Message";
    $Message = $Name . " " . $Email . " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $Name . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$Message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $Name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Sutton Electrical Services</title>
</head>

<body>

<header class="header-area">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="menu-icon-bar"></span>
                        <span class="menu-icon-bar"></span>
                        <span class="menu-icon-bar"></span>
                    </button>

                    <div id="main-nav" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li>
                                <a href="index.html" class="nav-item nav-link active">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#aboutus" class="nav-item nav-link">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a href="services.html" class="nav-item nav-link" data-toggle="dropdown">Services</a>
                                <div class="dropdown-menu">
                                    <a href="services.html#domesticservices" class="dropdown-item">Domestic services</a>
                                    <a href="services.html#corporateservices" class="dropdown-item">Corporate services</a>
                                    <a href="services.html#generalservices" class="dropdown-item">General services</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="portfolio.html" class="nav-item nav-link" data-toggle="dropdown">Portfolio</a>
                                <div class="dropdown-menu">
                                    <a href="portfolio.html" class="dropdown-item">Bundys job I did 1</a>
                                    <a href="portfolio.html" class="dropdown-item">Bundys job I did 2</a>
                                    <a href="portfolio.html" class="dropdown-item">Bundys job I did 3</a>
                                </div>
                            </li>
                            <li>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="logo">
                <img class="rounded mx-auto d-block logo" src="assets/images/bundylogo.jpg" width="300">
            </div>

            <div class="company-header">
                <div class="container">
                    <h1 id="company-name">Sutton Electrical Services</h1>
                    <p>Serving you better, everyday</p>
                </div>
            </div>
        </header>

<div class="fcf-body">

    <div id="fcf-form">
    <h1>Contact us</h1>
    <hr>
    <br>
    <h2>Call</h2>
    <br>
    <h2 class="btn button-primary contactlink"><i class="fas fa-phone"></i>  <a class="contactlink" href="tel: 07734-9020900">07734-9020900</h2></a>
    <br>
    <br>
    <h2>Email</h2>
    <br>
    <h2><i class="fas fa-envelope-open-text"></i>  alan@suttonelectricalservices.net</h2>
    <br>
    <hr>
    <br>
    <h2>Or fill in the form below</h2>
    <br>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Name *</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Email *</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Phone" class="fcf-label">Phone</label>
            <div class="fcf-input-group">
                <input type="text" id="Phone" name="Phone" class="fcf-form-control">
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Message *</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>
        <div><small>* Required</small></div>
        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="button button-primary">Send Message <i class="fas fa-paper-plane"></i></button>
        </div>
    </form>
    </div>

</div>
<footer class="footer-area" id="footer">
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container">	
            			
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li><a href="index.html" class="nav-item nav-link active"><i class="fas fa-home"></i></a></li>
					<li><a href="index.html#aboutus" class="nav-item nav-link">About Us</a></li>
					<li class="dropdown">
						<a href="services.html" class="nav-item nav-link">Services</a>
					</li>
					<li>
						<a href="portfolio.html" class="nav-item nav-link">Portfolio</a>
					</li>
                    <li><a href="contact.html" class="nav-item nav-link">Contact</a></li>
                </ul>
                <div class ="facebook-div">
                <a id="facebook-icon" href="https://www.facebook.com/SuttonElectricalServices/" class="nav-item nav-link" target="_blank"><i class="fab fa-facebook-square"></i></a>
                </div>
			</div>
		</div>
    </nav>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</footer>

<script src="scripts/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>