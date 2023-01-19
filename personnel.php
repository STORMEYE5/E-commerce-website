<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include ('common.php');
$title = "Personnel Page";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>
<!-- content of login page -->
<div class="content">
        <div class="login-form">
            <h1>Login Page</h1>
            <div class="username">
                <p>Username</p>
                <!-- entering spaces to allow user to input his login details -->
                <input type="username" name="user" id="usname" placeholder="Enter Username" >
                <span class="user_det"></span>
            </div>
            <div class="password">
                <p>Password</p>
                <input type="password" name="password" id="passwd" placeholder="Enter Password" >
                <span class="pw_det"></span>
            </div>
              <!-- entering the login button -->

        <div class="button">
            <a id="login_btn">Login</a></button>
        </div>
        </div>
    </div>



<?php
OutputFooter();
?>