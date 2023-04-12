<?php
    include('site/header.php');
?>

<?php
session_start();
if(isset($_SESSION['loginSession'])){
    echo "Jest sesja";
    unset($_SESSION['loginSession']);
}else{
    if (isset($_POST['submit'])) {
        $login = htmlspecialchars($_POST['login']);
        $pass = htmlspecialchars($_POST['password']);
        //echo $login ." ". $pass;
        $conn = mysqli_connect('localhost', 'webPLA', 'admin', 'portal');
        if (!$conn){
            echo 'Błąd połączenia z bazą danych. Error: ' .mysqli_connect_error();
        } else {
            $sqlSelect = 'SELECT Login, Haslo FROM users';
            $result = mysqli_query($conn, $sqlSelect);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $flag=true;
            foreach ($users as $user){
                //echo $user['Login'] ." - ". $user['Haslo']."<br>";
                if ($user['Login']==$login && $user['Haslo']==$pass){
                    echo 'Jestem zalogowany';
                    $flag = false;
                    $_SESSION['loginSession']='start';
                    header('location: login.php')
                    //break;
                }
                // else {
                //     echo "Błędnie podałeś login lub hasło.";
                // }
            }
        }
        if ($flag){
            echo 'Błąd';
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
<?php } ?>