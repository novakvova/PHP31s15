<?php
$errors = array();
$email = '';
$password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) and !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $errors["email"] = "Поле пошта є обов'язковим";
    }
    if (isset($_POST['password']) and !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $errors["password"] = "Поле пошта є обов'язковим";
    }
    if (count($errors) == 0) {
        header("Location: /");
        exit;
    }
}
?>
<?php include "_header.php"; ?>
    <div class="row mt-5">
        <form method="post">
            <h1>Реєстрація</h1>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email"
                       class="form-control
                       <?php
if (isset($errors["email"]) && !empty($errors["email"])) {
    echo "is-invalid";
}
                       ?>"
                       id="email"
                       name="email"
                       placeholder="Enter email" />
                <?php
                if (isset($errors["email"]) && !empty($errors["email"])) {
                    echo '
                <div class="invalid-feedback d-block">
                    Please choose a email.
                </div>
                        ';
                }
                ?>

            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       placeholder="Enter password"/>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm password</label>
                <input type="password"
                       class="form-control"
                       id="confirm_password"
                       name="confirm_password"
                       placeholder="Enter password"/>
            </div>

            <div class="form-group">
                <input type="submit" class="btnSubmit" value="Register"/>
            </div>
        </form>


    </div>

<?php include "_footer.php";