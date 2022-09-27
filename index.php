<!DOCTYPE html>
<html>
        <head>
                <meta charset='utf-8'/>
                <title>password checker</title>
        </head>
        <body>
                <div class=main-box">
                        <h2>password checker</h2>
                        <h2>please enter password here</h2>
                        <form action='#' method='post'>
                                <input type='password' name='password' placeholder='password'/>
                        </form>
                        <hr>
                        <h2>as my tribute to richard michael stallman</h2>
                        <h2>here is a link to the open source github</h2>
                        <a href='https://github.com/suriryuk/2ndctf'>https://github.com/suriryuk/2ndctf</a>
                </div>
        <?php
                $password = $_POST['password'];
                
                if(isset($password)){
                        if($password == 'password_checker_admin_password_is_not_safed!!'){
                                echo 'Congrats the flag is 2ndCTF{'.$password.'}';
                        }
                        echo 'Invaild password!';
                }
        ?>
        </body>
</html>
