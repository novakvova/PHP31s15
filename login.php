<?php
    $errors=array();
    $email='';
    $password="";
    if($_SERVER["REQUEST_METHOD"]=="POST") {

        if(isset($_POST['email']) and !empty($_POST['email']))
        {
            $email=$_POST['email'];
        }
        else
            $errors["email"]="Поле пошта є обов'язковим";

        if(isset($_POST['password']) and !empty($_POST['password']))
        {
            $password=$_POST['password'];
        }
        else
            $errors["password"]="Поле пошта є обов'язковим";
        
        if(count($errors)==0) {
            header("Location: /");
            exit;
        }


    }
?>
<?php include "_header.php"; ?>

<div class="login-container">
            <div class="row">
                <div class="offset-md-3 col-md-6 login-form-1">
                    <h3>Login for Form 1</h3>
                    <form method="post">
                    <?php if(count($errors)!=0) { ?>
                        <div class="alert alert-danger" role="alert">
                            Заповніть поля
                        </div>
                    <?php } ?>

                        <div class="form-group">
                            <input type="text" 
                                class="form-control" 
                                placeholder="Your Email *" 
                                value="<?php echo $email; ?>"
                                name="email" />
                        </div>
                        <div class="form-group">
                            <input type="password" 
                                class="form-control" 
                                placeholder="Your Password *" 
                                value=""
                                name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    
<?php include "_footer.php";