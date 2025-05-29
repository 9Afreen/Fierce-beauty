<?php 
    include("connection.php");
    include("Contact.php")
?>




<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="Contact.css">
        
    </head>
    <body>
        <section>
            <div class="header"> <h1> <strong>FIERCE</strong> BEAUTY ACADEMY </h1></div>
        <div class="options">
            <nav>
                     <A href="Index.html">HOME</A>
                     <A href="Course.html">COURSE </A>
                     <A href="about.html">ABOUT </A>
                     <A href="gallery.html">GALLERY </A>
                     <A href="Contact.html">CONTACT </A>
                     <A href="Login.php"><img src="Images/user.jpeg" alt="">&nbsp; &nbsp; LOG IN</A>
            </nav>
        </div>
        </section>


        <div class="Adiv">
            <strong>Contact</strong>
        </div>

        <section class="Csec1">
            <p class="para1"> For More Information Don't Hesitate to Get in Touch</p>
            <form action="Contact.php" method="post">
                <input type="text" class="f1" placeholder="First Name" name="firstname" required></input>
                <input type="text" class="f2" placeholder="Last Name"   name="lastname" required></input>
                <input type="email" class="f3" placeholder="Email"  name="email" required></input>
                <input type="text" class="f4" placeholder="Message" name="message" required></input>
                <input type="submit" class="btn" value="SUBMIT QUERY" name = "submit" style="height: 40px; width: 120px; background-color: rgb(46, 45, 45); color: white;
                border: none; margin: 50px; "/>
            </form>
        </section>

    
        <footer>
            <h1>Subscribe Now</h1>
            <p class="fpara">stay in style</p>
            <p class="fpara1">Email*</p>
            <Input type="email" class="ebox"></Input><br>
            <p class="fpara2">Yes, Subscribe Me To Newsletter. !!! </p> 
            <button>Subscribe Me</button>

            <h2>___________________________________________________________________________</h2>
            <div class="fdiv">
                <P class="fpara3"> Address: <br>500 Terry Francine Street San Francisco, CA 94158</P>
                <p class="fpara4"> Telephone: <br> 130-620-1307</p>     
                <P class="fpara5"> Email: <br> info@fiercebeauty.com</P> 
                <div class="images">
                    <!-- <a href="#"><img src="Images/f1.jpeg" alt="Pins account"></a> -->
                    <a href="#"><img src="Images/f2.jpeg" alt="Instagram account"> </a>
                </div>    
            </div>
        </footer>
    </body>
</html>