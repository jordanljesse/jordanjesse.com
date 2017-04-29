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
    <?=$thankYou?> <!-- displays status message -->
        <nav class="navbar navbar-toggleable fixed-top navbar-inverse bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#hero"><h2>JLJ</h2></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About<span class="sr-only">(current)</span></a>
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
        <section id="hero" class="bg-image padded-top">
                <div class="container-fluid text-white">
                    <div class="row pt-5">
            			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            		        <h1 class="display-3 text-center py-5">Jordan Jesse</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                	        <p class="text-justify">Hi! My name's Jordan and I'm a Los Angeles-bound web developer currently based in Lawrence, KS. I'm working hard right now to design and build a new home page, which should be up this weekend(4/30). Cheers!</p>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center p-5">
            		        <a href="#contact"><button class="btn btn-primary" type="button">Contact Me</button></a>
                        </div>
                    </div>
                </div>
        </section>
        <section id="about" class="bg-inverse text-white padded-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-lg-6 offset-lg-1">
                        <h2 class="text-center p-5">About</h2>
        		    	<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus optio beatae praesentium unde veritatis aliquam neque quam corporis quisquam reprehenderit ratione tenetur, quod repudiandae rerum, cumque laudantium velit. Praesentium, a. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ex incidunt natus. Nemo eum adipisci, enim in, ducimus eligendi molestiae delectus repellat dolor temporibus, esse officiis voluptas excepturi similique ullam.</p>
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
        		    	<p class="text-justify pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nulla, sint adipisci, impedit cum quos dolorum voluptatibus sapiente debitis pariatur perspiciatis officiis dolorem voluptatem dolore! Numquam consequatur eaque rerum voluptatibus.</p>
        	    	</div>
                </div>
            </div>
            <div class="row no-gutters">
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><img src="img/la-bw.jpg" class="img-fluid" alt=""></div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><img src="img/la-bw.jpg" class="img-fluid" alt=""></div>
                <div class="col-xs-12 col-md-6 col-lg-4 m-auto"><img src="img/la-bw.jpg" class="img-fluid" alt=""></div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><img src="img/la-bw.jpg" class="img-fluid" alt=""></div>
    			<div class="col-xs-12 col-md-6 col-lg-4 m-auto"><img src="img/la-bw.jpg" class="img-fluid" alt=""></div>
                <div class="col-xs-12 col-md-6 col-lg-4 m-auto"><img src="img/la-bw.jpg" class="img-fluid" alt=""></div>
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
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae voluptatem facere nihil quo culpa sit! Nemo officia praesentium ipsum enim repudiandae possimus animi blanditiis porro, dolorum earum quia nobis explicabo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates beatae voluptatum, mollitia natus, quibusdam porro animi nemo veritatis architecto obcaecati modi dolorum repudiandae? Distinctio, quidem. Libero id maxime omnis quae?</p>
                        <ul class="list-inline">
                            <a href="https://twitter.com/codejordancode"><li class="list-inline-item px-4"><img class="social" src="img/twitter.svg"></li></a>
                            <a href="https://github.com/jordanljesse"><li class="list-inline-item px-4"><img class="social" src="img/github.png"></li></a>
                            <a href="https://codepen.io/jljesse"><li class="list-inline-item px-4"><img class="social" src="img/codepen.png"></li></a>
                            <a href="https://linkedin.com/in/jordan-jesse-87b103121"><li class="list-inline-item px-4"><img class="social" src="img/linked-in.png"></li></a>
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