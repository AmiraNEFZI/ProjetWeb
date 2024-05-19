<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee website</title>
    <link rel="stylesheet" href="style.css">
    <head>
    <style>
        .zoom-in {
            transition: transform 0.3s ease;
        }

        .zoom-in:hover {
            transform: scale(1.1);
        }

        /* Animation for the circles */
.circle:hover {
    transform: scale(1.2);
}

/* Animation for the h1 element */
.hero_split.right .content h1:hover {
    color: #ff0000; /* Change the color on hover */
}

    </style>
</head>

    

</head>
<body>
<body>
    <!-- Your HTML content here -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var testimonials = document.querySelectorAll(".single-testimonial");

            testimonials.forEach(function(testimonial) {
                testimonial.addEventListener("mouseover", function() {
                    this.classList.add("zoom-in");
                });

                testimonial.addEventListener("mouseout", function() {
                    this.classList.remove("zoom-in");
                });
            });
        });
    </script>
</body>



    
         <ul class="navlist"> 
             <li><a href="#Home">Home</a></li>
             <li><a href="index3.php">Menu</a></li>
             <li><a href="#contact">Contact</a></li>
             <li><a href="#testimonial">Testemonials</a></li>
            
           
          </ul>
        

    <section class="hero">
    <div class="hero_split right">
    <div class="content">
        <h1>Coffee Time</h1>
        <p>Découvrez une expérience café exceptionnelle chez nous. Nous vous offrons un café de qualité supérieure dans un cadre calme et confortable. Notre café est l'endroit idéal pour passer un excellent moment.</p>
        <a href="index2.php" target="_blank"><button>préparer</button></a>
    </div>
    <img src="https://i.pinimg.com/564x/9e/f6/20/9ef6203ecdff92f38d6acdce3a952a2c.jpg" style="max-width: 200px;">
</div>
<div class="middle">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
</div>

        </div>
        <div class="hero_split left">
            <style>
                table {
                    margin: 0 auto; /* Centre le tableau horizontalement */
                    margin-right: 230px; /* Déplace le tableau vers la droite */
                }
            </style>
            <table border="3" width="40%" cellspacing="5" cellpadding="4">
                <tr>
                    <td align="center" colspan="4" bgcolor="beige">
                        <b>Soyez le bienvenu</b>
                    </td>
                    
                </tr>
                <tr>
                    <td width="34%" align="left" bgcolor="beige"><b>Les jours</b></td>
                    <td width="61%" align="center" bgcolor= "beige"><b>Les heures</b></td>
                </tr>
                    
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>lundi</b></td>
                    <td  align="center"><b style="color: rgb(114, 80, 80)";>8:00 - 18:00</b></td>
                </tr>
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>Mardi</b></td>
                    <td color="white" align="center"><b style="color: rgb(114, 80, 80)";>8:00 - 18:00</b></td>
                </tr>
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>mercredi</b></td>
                    <td color="white" align="center"><b style="color: rgb(114, 80, 80)";>8:00 - 18:00</b></td>
                </tr>
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>Jeudi</b></td>
                    <td color="white" align="center"><b style="color: rgb(114, 80, 80)";>8:00 - 18:00</b></td>
                </tr>
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>Vendredi</b></td>
                    <td color="white" align="center"><b style="color: rgb(114, 80, 80)";>8:00 - 18:00</b></td>
                </tr>
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>Samedi</b></td>
                    <td color="white" align="center"><b style="color: rgb(114, 80, 80)";>8:00 - 16:00</b></td>>
                </tr>
                <tr>
                    <td width="34%" align="left" ><b style="color: rgb(236, 200, 200)";>Dimanche</b></td>
                    <td color="white" align="center"><b style="color: rgb(114, 80, 80)";>fermé</b></td>
                </tr>
            </table>
            <img src="https://i.pinimg.com/236x/8f/37/2e/8f372e449d1850652977d8484348d88b.jpg" style="max-width: 300px;">

        </div>
    </section>


    

    
  
    <section class="testimonial-area" id="testimonial">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Testimonials</h2>
                <p>See what our customers have to say about us!</p>
            </div>
            
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <blockquote>Great service! I was amazed by the quality of the coffee and the friendly staff. Will definitely come back for more.</blockquote>
                        <div class="testimonial-info">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThsuCUj_jN_W5Gk3tOwrfZi-wIJ66hVhqr-CYShtYHDOXZxXIF9bEYs4BSgefaOn2uhyo&usqp=CAU" alt="client">
                            <div class="testimonial-text">
                                <h5>John Doe</h5>
                                <h6>Happy Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <blockquote>Great service! I was amazed by the quality of the coffee and the friendly staff. Will definitely come back for more.</blockquote>
                        <div class="testimonial-info">
                            <img src="https://www.shutterstock.com/image-photo/young-asian-business-woman-wearing-600nw-2192133855.jpg" alt="client">
                            <div class="testimonial-text">
                                <h5>Jane Smith</h5>
                                <h6>Satisfied Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-testimonial">
                        <blockquote>Great service! I was amazed by the quality of the coffee and the friendly staff. Will definitely come back for more.</blockquote>
                        <div class="testimonial-info">
                            <img src="https://c8.alamy.com/compfr/m4r12e/barista-hommes-et-femmes-se-tenant-a-l-entree-de-coffee-shop-holding-tasses-a-cafe-heureux-proprietaires-de-cafe-qui-posent-avec-les-tasses-de-cafe-dans-la-main-m4r12e.jpg" alt="client">
                            <div class="testimonial-text">
                                <h5>David Johnson</h5>
                                <h6>Satisfied Customer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-container">
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:amiranefzi2003@gmail.com">amiranefzi2003@gmail.com</a></p>
        <p>Phone: <a href="tel:+1234567890">+216 22 036 401</a></p>
        <p>Address: <a href="https://www.google.com/maps?q=1600+Amphitheatre+Parkway,+Mountain+View,+CA">1600 Amphitheatre Parkway, Mountain View, CA</a></p>
    </section>
    </div>
    <footer id="footer">
        
            
                    &copy; 2024 Café Délicieux. Conçu par <a target="_blank" href="http://webthemez.com/" title="projet web coffee shop">Amira Nefzi</a>
               
        
                
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                    </ul>
        
    </footer><!--/#footer-->
</body>
</html>