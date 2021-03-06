<?php
    if($_POST["submit"]) {
        $recipient="info@jordanjesse.com";
        $subject="From jordanjesse.com contact form";
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];
        $mailBody="Name: $name\nEmail: $email\n\n$message";
        mail($recipient, $subject, $mailBody, "From: jordanljesse@vernonia.dreamhost.com");
        $thankYou="<p>Thank you! Your messsage has been sent.</p>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jordan Jesse | Full Stack Developer</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Jordan Jesse"/>
        <meta name="description" content="The online portfolio of Jordan Jesse."/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
    </head>
    <body>
    <?=$thankYou?> <!-- displays thank you message from contact form submission -->
        <nav class="navbar navbar-toggleable fixed-top navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#hero"><h2>JLJ</h2></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section id="hero" class="bg-image padded-top pb-5">
                <div class="container-fluid text-white">
                    <div class="row pt-5">
            			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            		        <h1 class="display-1 text-center py-5"><strong>Jordan Jesse</strong></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                	        <p class="text-center">Hello! My name's Jordan and I'm a Los Angeles based Software Engineer interested in full stack web development, embedded software, and data visualization.</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="about" class="bg-inverse text-white padded-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-lg-6 offset-lg-1 pb-5">
                        <h2 class="text-center p-5">About</h2>
        		    	<p class="text-justify">I'm a programmer with a design background who's passionate about building things for the web. I'm really excited about <a href="https://developers.google.com/web/progressive-web-apps/" target="_blank">Progressive Web Apps</a> and how they enable developers to write code once that runs everywhere(even offline!). Feel free to read through my <a href="https://jordanljesse.github.io" target="new">blog</a> to see what I'm thinking about and tinkering with lately.
                        <br><br>I'm currently a Software Consultant for Computech Corporation and enjoy solving problems across a wide variety of domains. When I'm not working on software or writing about technology I like to produce music, read books, and practice street photography.</p>
                    </div>
        	    	<div class="col-md-4 py-5 text-center">
        		    	<img class="portrait" 
                             src="img/oval-portrait.png" 
                             srcset="img/oval-portrait@2x.png 800w" 
                             alt="A portrait of Jordan.">
        			</div>
        	    </div>
            </div>
        </section>
        <section id="portfolio" class="padded-top">
            <div class="container-fluid">
        	    <div class="row">
        	    	<div class="col">
        		    	<h2 class="text-center py-5">Portfolio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
        		    	<p class="text-justify pb-5">As a young developer, I use design principles when coming up with solutions and strive to write code that is readable, scalable, and fast. Here are some of my favorite projects.</p>
        	    	</div>
                </div>
            </div>
            <div class="row no-gutters">
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto">
                    <a href="http://www.thatcherstrainingcenter.com" target="_blank">
                        <img src="img/portfolio1.jpg" 
                             srcset="img/portfolio1@2x.jpg 800w" 
                             class="img-fluid" 
                             alt="A screenshot of the Thatchers Training Center homepage.">
                    </a>
                </div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto">
                    <a href="https://bananapad.azurewebsites.net" target="_blank">
                        <img class="img-fluid"
                             src="img/portfolio2.jpg"
                             srcset="img/portfolio2@2x.jpg 800w"
                             alt="A screenshot of the BananaPad homepage.">
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 m-auto">
                    <a href="https://codepen.io/jljesse/pen/LzvoJq" target="_blank">
                        <img class="img-fluid"
                             src="img/portfolio3.jpg"
                             srcset="img/portfolio3@2x.jpg 800w"
                             alt="A screenshot of the What's The Weather? homepage.">
                    </a>
                </div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto">
                    <a href="https://jordanljesse.github.io" target="_blank">
                        <img class="img-fluid"
                             src="img/portfolio4.jpg"
                             srcset="img/portfolio4@2x.jpg 800w"
                             alt="A screenshot of the Code As A Craft homepage.">
                    </a>
                </div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto">
                    <a href="https://github.com/jordanljesse/justice-hours" target="_blank">
                        <img class="img-fluid"
                             src="img/portfolio5.jpg"
                             srcset="img/portfolio5@2x.jpg 800w" 
                             alt="A screenshot of the Justice Hours homepage.">
                    </a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 m-auto">
                    <a href="https://codepen.io/jljesse/pen/dMEdNv" target="_blank">
                        <img class="img-fluid"
                             src="img/portfolio6.jpg"
                             srcset="img/portfolio6@2x.jpg 800w"
                             alt="A screenshot of an animated Andriod logo built with CSS.">
                    </a>
                </div>
    		</div>
        </section>
        <section id="contact" class="bg-inverse text-white padded-top">
            <div class="container-fluid">
        	    <div class="row">
                    <div class="col-md-2 offset-md-5 p-5">
            		   	<h2 class="text-center">Contact</h2>
                    </div>
                </div>
                <div class="row">
        		   	<div class="col-md-6 col-lg-5 offset-lg-1">
        			   	<form name="contact-us" method="post" action="index.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="name"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text"
                                       class="form-control"
                                       name="email"
                                       placeholder="name@email.com"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message"
                                          class="form-control"
                                          placeholder="Your message here"></textarea>
                            </div>
                            <div class="form-group pb-5">
                                <input type="submit" class="btn btn-secondary" name="submit" value="Submit">
                            </div>
                        </form>
        	    	</div>
                    <div class="col-md-6 col-lg-5">
                        <p class="text-justify">I won't be available for new roles/clients until Q2 2019. However, feel free to reach out to me with any questions regarding your software project and if I'm not able to help, I can probably put you in touch with somebody who can.</p>
                        <ul class="list-inline">
                            <a href="https://github.com/jordanljesse">
                                <li class="list-inline-item p-4">
                                    <img class="social" src="img/github.png">
                                </li>
                            </a>
                            <a href="https://codepen.io/jljesse">
                                <li class="list-inline-item p-4">
                                    <img class="social" src="img/codepen.png">
                                </li>
                            </a>
                            <a href="https://linkedin.com/in/jordan-jesse-87b103121">
                                <li class="list-inline-item p-4">
                                    <img class="social" src="img/linked-in.png">
                                </li>
                            </a>
                        </ul>
                    </div>
            	</div>
            </div>
        </section>
        <footer class="bg-faded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col pt-2">
                		<p>&copy;<?php echo date("Y");?> Jordan Jesse</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/smooth-scroll.js"></script>
    </body>
</html>