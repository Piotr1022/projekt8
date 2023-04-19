<?php
include('site/header.php');
?>
 <?php 
 session_start();
    if(isset($_SESSION['loginSession'])){
        if(isset($_POST['logout'])) {
        unset ($_SESSION['loginSession']);
        header('location: login.php');
        } else {
    ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Wylogowywanie</h1>
    </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
                <button type="submit" class="btn btn-primary" name='logout'>Log Out</button>
                 </form>
            </div>
        </div>
    </div>
 <?php
        }
    } else {
    if(isset($_POST['submit'])) {
       $login = htmlspecialchars($_POST['login']);
       $pass = htmlspecialchars($_POST['password']);
       // echo $login . " " . $pass;
       $conn = mysqli_connect('localhost','webPLA','admin','portal');
       if (!$conn) {
        echo 'Błąd połączenia z baża danych. Error : ' . mysqli_connect_error();
       }    else {
            $sqlSelect = 'SELECT login, haslo FROM users';
            $result = mysqli_query($conn, $sqlSelect);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $flag = true;
            foreach ($users as $user) {
            // echo $user['login'] . " - " . $user['haslo'] . "<br>";
            if($user['login'] == $login && $user['haslo'] == $pass ){
             echo "Jestem zalogowany";
            $flag = false;
            $_SESSION['loginSession'] = $login;
            header('location: login.php');
         // break;  
        }
      } 
    if ($flag) echo "Błędnie podane hasło.";
       }
    }
    

 ?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h1>Zaloguj się</h1>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> 
                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="alert alert-danger"></label> -->
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Login" name="login">
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleFormControlInput1" class="alert alert-danger"></label> -->
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Hasło" name="password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="submit">LOG IN</button>
                    <button type="reset" class="btn btn-primary">CANCEL</button>
                </div>
            </form>

        </div>
    </div>
</div>
    
</body>
</html>
<?php } ?>

<?php
    include('site/footer.php');
?>