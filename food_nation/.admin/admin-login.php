<?php
session_start();
require_once "db.php";
?>
<form action="admin-views.php" method="post">
        <div class="login-box">
            <h3>Login</h3>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Login">
        </div>
    </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->