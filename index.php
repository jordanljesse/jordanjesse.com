<!-- takes the message from 'Contact' form and sends it as an email -->
<?php
    if($_POST["submit"]) {
        $recipient="info@jordanjesse.com";
        $subject="Contact form to email message";
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
        <title>Jordan Jesse | Web Developer</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Jordan Jesse"/>
        <meta name="description" content="The online portfolio of web developer Jordan Jesse."/>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    </head>

    <body>
    <?=$thankYou?> <!-- displays status message after user submits form-->
        <nav class="navbar navbar-toggleable fixed-top navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            		        <h1 class="display-3 text-center py-5">Jordan Jesse</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                	        <p class="text-justify">Hi! My name's Jordan and I'm a Los Angeles bound front end developer interested in full stack web development, embedded software, and data visualization.</p>
                        </div>
                    </div>
                </div>
        </section>
        <section id="about" class="bg-inverse text-white padded-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-lg-6 offset-lg-1 pb-5">
                        <h2 class="text-center p-5">About</h2>
        		    	<p class="text-justify">Hi! My name's Jordan and I'm a musician, designer, and veteran who enjoys solving problems with code. I served in the Air Force for six years during which I traveled far, learned a lot, and made some amazing friends. Funny story: when I enlisted I requested to be stationed "anywhere warm" and the military sent me to Wyoming. Since leaving the military I have sold everything I own to travel across the country, studied graphic design in college, and realized that code was the medium I liked best.</p>

                        <p>I love developing new skills and cycling through a variety of hobbies. I do my best to grow a little as a musician, designer, photographer, writer, and technologist each year and enjoy wearing many hats, so to speak(fun fact: I was once a professional skateboarder and dance teacher). I'm an autodidact through and through, and as such I'm the most happy when I'm learning something new(specifically, when I get to apply some new skill/idea). That's why I'm so excited to be spending the second half of 2017 learning full stack Javascript in sunny California! If you'd like to read more about my learning journey and what I'm working on lately, you can check out my <a href="https://jordanljesse.github.io" target="new">blog</a>.</p>
                    </div>
        	    	<div class="col-md-4 py-5 text-center">
        		    	<img class="portrait" src="img/oval-portrait.png" alt="A photo of Jordan.">
        			</div>
        	    </div>
            </div> <!-- closes 'container-fluid' div -->
        </section> <!-- closes 'about' section -->
        <section id="portfolio" class="padded-top">
            <div class="container-fluid">
        	    <div class="row">
        	    	<div class="col">
        		    	<h2 class="text-center py-5">Portfolio</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
        		    	<p class="text-justify pb-5">As a junior front end developer I use design principles when coming up with solutions and strive to write performant, maintainable, and readable code. I try to follow industry best practices while exploring future technologies.</p>
        	    	</div>
                </div>
            </div>
            <div class="row no-gutters">
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><a href="http://www.thatcherstrainingcenter.com" target="new"><img src="img/portfolio1.jpg" srcset="img/portfolio1@2x.jpg 800w" class="img-fluid" alt="A screenshot of the Thatchers Training Center homepage."></a></div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><a href="#"><img class="img-fluid" src="img/portfolio2.jpg" srcset="img/portfolio2@2x.jpg 800w" alt=""></a></div>
                <div class="col-xs-12 col-md-6 col-lg-4 m-auto"><a href="#"><img class="img-fluid" src="img/portfolio3.jpg" srcset="img/portfolio3@2x.jpg 800w" alt=""></a></div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><a href="#"><img class="img-fluid" src="img/portfolio4.jpg" srcset="img/portfolio4@2x.jpg 800w" alt=""></a></div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><a href="#"><img class="img-fluid" src="img/portfolio5.jpg" srcset="img/portfolio5@2x.jpg 800w" alt=""></a></div>
                <div class="col-xs-12 col-md-6 col-lg-4 m-auto"><a href="#"><img class="img-fluid" src="img/portfolio6.jpg" srcset="img/portfolio6@2x.jpg 800w" alt=""></a></div>
    		</div>
        </section> <!-- closes 'portfolio'  -->
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
                                <input type="text" class="form-control" name="name" placeholder="First Last" required="required">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" placeholder="your@email.address" required="required">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" class="form-control" placeholder="Your positive comment, constructive criticism, or curious inquiry goes here"></textarea>
                            </div>
                            <div class="form-group pb-5">
                                <input type="submit" class="btn btn-secondary" name="submit">
                            </div>
                        </form>
        	    	</div>
                    <div class="col-md-6 col-lg-5">
                        <p class="text-justify">Feel free to reach out to me with any questions or comments you might have regarding your project, design woes, or technical conundrums. You can also find me being social online using the links below.</p>
                        <ul class="list-inline">
                            <a href="https://twitter.com/codejordancode"><li class="list-inline-item p-4"><img class="social" src="img/twitter.svg"></li></a>
                            <a href="https://github.com/jordanljesse"><li class="list-inline-item p-4"><img class="social" src="img/github.png"></li></a>
                            <a href="https://codepen.io/jljesse"><li class="list-inline-item p-4"><img class="social" src="img/codepen.png"></li></a>
                            <a href="https://linkedin.com/in/jordan-jesse-87b103121"><li class="list-inline-item p-4"><img class="social" src="img/linked-in.png"></li></a>
                        </ul>
                    </div>
            	</div>
            </div> <!-- closes 'container-fluid' div -->
        </section> <!-- closes 'contact' section -->
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
        <script src="js/smooth-scroll.js"></script> <!-- jQuery is required for smooth-scroll to work -->
    </body>
</html>
