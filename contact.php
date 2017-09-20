<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/head.php'; ?>
        <title>Contact Info</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/header.php'; ?>
        </header>
        <main id="contactpage">
        
        <div id="container-contact">
        <section id="contact_left">
            <h1>Contact Us</h1>
            <span id="company"><p><strong>Salmon River Adventures</strong></p></span>
            <span id="address">
                <p>1000 Main St.,<br>Riggins, Id</p>
            </span>
            <span id="phone">&#9742; 208.123.4567</span>
            <span id="email">&#9993; salmonriveradventures@gmail.com</span>
            <div id="questioncomment"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.4359566114067!2d-116.31799042136358!3d45.42071254446977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54a6c569b5b4cae5%3A0x3118ef58524f3a4!2s1000+Main+St%2C+Riggins%2C+ID+83549!5e0!3m2!1sen!2sus!4v1491525379347" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </section>
        <section id="contact_right">
           <h2 id="description">Send us a message!</h2>
            <form>
                    <input name="fullname" type="text" value="" placeholder="Full Name" pattern="[a-zA-Z -._]{3,99}" required> 
                    <input name="email" value="" type="email" placeholder="Email" required>
                    <input name="phone" type="tel" value="" placeholder="Phone Number" pattern="[0-9]{10,20}" required >    
                    <label id="comment-lable"><span>Questions/Comments:</span></label><div><textarea name="comment" id="comment"></textarea></div>
    
                <input type="submit" value="Submit" class="submitBtn">
            </form>
        </section>
        </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/footer.php'; ?>
        </footer>
        <script src="js/jquery-3.1.1.min.js"></script> 
        <script src="js/javascript.js"></script>
    </body>
</html>