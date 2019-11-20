<?php
$errors = array();
$email = '';
$password = "";
$confirm_password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) and !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $errors["email"] = "Поле пошта є обов'язковим";
    }
    if (isset($_POST['password']) and !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $errors["password"] = "Поле пароль є обов'язковим";
    }

    if (isset($_POST['confirm_password']) and !empty($_POST['confirm_password'])) {
        $confirm_password = $_POST['confirm_password'];
    } else {
        $errors["confirm_password"] = "Поле підтвердити пароль є обов'язковим";
    }

    if (isset($_POST['image']) and !empty($_POST['image'])) {
        //$password = $_POST['image'];
        ;
    } else {
        $errors["image"] = "Поле фото є обов'язковим";
    }

    if (count($errors) == 0) {
        header("Location: /");
        exit;
    }
}
?>
<?php include "_header.php"; ?>
<?php include "input-helper.php"; ?>

    <div class="row mt-5">
        <div class="offset-3 col-md-6">
            <form method="post">
                <h1>Реєстрація</h1>
                <?php craate_form_group('email',
                    'Електронна пошта',
                    $errors,
                    'email'); ?>
                <?php craate_form_group('password',
                    'Пароль',
                    $errors,
                    'password'); ?>
                <?php craate_form_group('confirm_password',
                    'Повтор пароль',
                    $errors,
                    'password'); ?>
                <?php craate_form_group('image',
                    'Оберіть файл',
                    $errors,
                    'file'); ?>
                <input type="submit" class="btn btn-success" value="Реєстрація"/>
            </form>
        </div>
    </div>

<?php include "_footer.php";