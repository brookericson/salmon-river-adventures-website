<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/head.php'; ?>
        <title>Advanced Adventure Trips</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/header.php'; ?>
        </header>
        <main id="adventure_trips_main">
        <h1>Adventure Trips</h1>
        
        <section id="adventures_section">
            
            <div class="adventure_info" id="beginner">
                <h3>Beginner</h3>
                 <p id="cost"><span id="dollar-sign">$</span>100</p>
                <ul>
                    <li><strong>Length: </strong> 1 days</li>
                   <li><strong>Distance: </strong> 20 miles</li>
                    <li><strong>Skill Level: </strong> Beginner (7+ yrs)</li>
                    <li><strong>Rapids: </strong>Class I</li>
                    <li>&#x2713; Rafting Equipment</li>
                    <li class="signup" id="last"><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
            
            <div class="adventure_info" id="intermediate">
                <h3>Intermediate</h3>
                <p id="cost"><span id="dollar-sign">$</span>300</p>
                <ul>
                    <li><strong>Length: </strong> 3 days</li>
                    <li><strong>Distance: </strong> 80 miles</li>
                    <li><strong>Skill Level: </strong> Intermediate (7+ yrs)</li>
                    <li><strong>Rapids: </strong>Class III</li>
                    <li>&#x2713; Meals</li>
                    <li>&#x2713; Rafting Equipment</li>
                    <li>&#x2713; Tents</li>  
                    <li class="signup"><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
            
           <div class="adventure_info" id="advanced">
                <h3>Advanced</h3>
                <p id="cost"><span id="dollar-sign">$</span>600</p>
                <ul>
                    <li><strong>Length: </strong> 5 days</li>
                    <li><strong>Distance: </strong> 120 miles</li>
                    <li><strong>Skill Level: </strong> Advanced (12+ yrs)</li>
                    <li><strong>Rapids: </strong>Class V</li>
                    <li>&#x2713; Meals</li>
                    <li>&#x2713; Rafting equipment</li>
                    <li>&#x2713; Tents</li> 
                    <li class="signup"><a href="signup.php">Sign Up</a></li>
                </ul>
            </div>
    
        </section>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmonriveradventures/modules/footer.php'; ?>
        </footer>
        <script src="js/jquery-3.1.1.min.js"></script> 
        <script src="js/javascript.js"></script>
    </body>
</html>