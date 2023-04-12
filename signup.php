<?php include('header.php'); ?>
<?php
$error = array("", "", "", "", "",true);
if (isset($_POST['submit'])) {
    $imie = htmlspecialchars($_POST['imie']);
    if ($imie == "" || strlen($imie) < 3) {
        $error[0] = "Brak imienia.";
        // echo $error[0];
    }
    $nazwisko = htmlspecialchars($_POST['nazwisko']);
    if ($nazwisko == "" || strlen($nazwisko) < 3) {
        $error[1] = "Brak nazwiska.";
    }
    $mail = htmlspecialchars($_POST['mail']);
    if ($mail == "") {
        $error[2] = "Brak mail'a.";
    }
    $login = htmlspecialchars($_POST['login']);
    if ($login == "" || strlen($login) < 2) {
        $error[3] = "Brak loginu.";
    }
    $haslo1 = htmlspecialchars($_POST['haslo2']);
    $haslo2 = htmlspecialchars($_POST['haslo2']);
    if (
        !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $haslo1)
        || !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', $haslo2)
        || $haslo1 != $haslo2
    )
        $error[4] = "Hasło musi posiadać min. 8 znaków. i być identyczne.";
    // 1wwwdAw@dwaA!aa
    
    if (!empty(!empty(['regulamin']))) {
        $error[5]=true;
    } else {
        $error[5]=false;
    }
}
?>


<div class="container">
    <div class="row">
        <div class="col-12">

            
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <h1>FORMULARZ</h1>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="alert alert-danger"><?php echo $error[0]; ?></label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Imię" name="imie">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="alert alert-danger"><?php echo $error[1]; ?></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nazwisko" name="nazwisko">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="alert alert-danger"><?php echo $error[2]; ?></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Login" name="login">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="alert alert-danger"><?php echo $error[3]; ?></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nazwa@mail.com" name="mail">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="alert alert-danger"><?php echo $error[4]; ?></label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Hasło" name="haslo1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="alert alert-danger"><?php echo $error[5]; ?></label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Powtórz hasło" name="haslo2">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="czek" value="regulamin">
                    <label class="form-check-label" for="exampleCheck1" >Akceptuje regulamin strony internetowej</label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="submit">Załóż konto</button>
                    <button type="reset" class="btn btn-primary">Resetuj</button>
                </div>
                <!-- <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> -->
            </form>

        </div>
    </div>
</div>

<!-- end - formularz -->
<?php
// if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', '1wwwdAw@dwaA!aa'))
//     echo "dobre hasło.";
// else
//     echo "błędne hasło.";
if($error[0] == "" && $error[1] == "" && $error[2] == "" && $error[3] == "" && $error[4] == "" && $error[5]){
    $conn = mysqli_connect('localhost', 'webPLA', 'admin', 'Portal');
    if(!$conn){
        echo 'Błąd połączenia : '.mysqli_connect_error();
    } else {
        echo 'Połączono z bazą danych!';
        echo $_POST['imie'];
        echo $_POST['nazwisko'];
        echo $_POST['login'];
        echo $_POST['mail'];
        echo $_POST['haslo1'];
        echo $_POST['haslo2'];
        echo $_POST['czek'];
    }
}
?> 