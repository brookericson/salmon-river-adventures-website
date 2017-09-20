<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/head.php'; ?>
        <title>Sign Up</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/header.php'; ?>
        </header>
        
        <main id="sign_up_main">
            
            <h1>Reserve Your Spot Today!</h1>
        
            <form>
                    <input name="fullname" type="text" value="" pattern="[a-zA-Z -._]{3,99}" placeholder="First Name" required> 
                    <input name="fullname" type="text" value="" pattern="[a-zA-Z -._]{3,99}" placeholder="Last Name" required> 
                    <input name="email" value="" type="email" placeholder="Email" required>
                    <input name="phone" type="tel" value="" pattern="[0-9]{10,20}" placeholder="Phone Number" required >
                    <input type="text" name="Adventure Trip" list="adventures" placeholder="Adventure Trip">
                        <datalist id="adventures">     
                            <option value="Beginner Adventure"></option>
                            <option value="Intermediate Adventure"></option>
                            <option value="Advanced Adventure"></option>
                        </datalist>
                <input type="submit" value="Sign me up!" class="submitBtn">
            </form>
            
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/footer.php'; ?>
        </footer>
        <script src="js/jquery-3.1.1.min.js"></script> 
        <script src="js/javascript.js"></script>
        </main>
    </body>
</html>