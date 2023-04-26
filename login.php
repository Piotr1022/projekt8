<?php
session_start();
include('site/header.php');
?>
<?php
if (isset($_SESSION['loginSession'])) {
    if (isset($_POST['logout'])) {
        unset($_SESSION['loginSession']);
        header('location: login.php');
    } else {
?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <h1>Konta użytkoników portalu</h1>
                </div>
                <div class="col-12">
                    <!-- wyświetlenie użytkowników -->
                    <?php
                    $conn = mysqli_connect('localhost', 'webPLA', 'admin', 'portal');
                    if (!$conn) {
                        echo 'Błąd połaczenia z bazą danych. Error : ' . mysqli_connect_error();
                    } else {
                        $sqlSelect = 'SELECT IdUser, Imie, Nazwisko, Login, Mail, Datadodania FROM users';
                        $sqlSelectResult = mysqli_query($conn, $sqlSelect);
                        $users = mysqli_fetch_all($sqlSelectResult, MYSQLI_ASSOC);

                    ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Imię</th>
                                    <th scope="col">Nazwisko</th>
                                    <th scope="col">Login</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Data utworzenia konta</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                $i = 1;
                                foreach ($users as $user) {

                                    echo "<tr>";
                                    echo "<th scope=\"row\">" . $i . "</th>";
                                    echo "<td>" . $user['Imie'] . "</td>";
                                    echo "<td>" . $user['Nazwisko'] . "</td>";
                                    echo "<td>" . $user['Login'] . "</td>";
                                    echo "<td>" . $user['Mail'] . "</td>";
                                    echo "<td>" . $user['Datadodania'] . "</td>";
                                    echo "<td>";
                                    echo "<form method=\"post\">";
                                    echo "<input type=\"hidden\" name=\"IdUser\" value=\"".$user['IdUser']."\">";
                                    echo "<input class=\"btn btn-warning btn-sm\" type=\"submit\" name=\"remove\" value=\"USUŃ\" ";
                                    echo "</form>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $i++;
                                }

                                ?>
                            </tbody>
                        </table>

                    <?php
                        mysqli_close($conn);
                    }
                    ?>
                </div>
            </div>
        </div>
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
                        <button type="submit" class="btn btn-primary" name="logout">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- 
        echo "Jest sesja";
    -->
        <?php
    }
} else {
    if (isset($_POST['submit'])) {
        $login = htmlspecialchars($_POST['login']);
        $pass  = htmlspecialchars($_POST['password']);
        // echo $login . " " . $pass;
        $conn = mysqli_connect('localhost', 'webPLA', 'admin', 'portal');
        if (!$conn) {
            echo 'Błąd połaczenia z bazą danych. Error : ' . mysqli_connect_error();
        } else {
            $sqlSelect = 'SELECT login, haslo FROM users';
            $result = mysqli_query($conn, $sqlSelect);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $flag = true;
            foreach ($users as $user) {
                // echo $user['login'] . " - " . $user['haslo'] . "<br>";
                if ($user['login'] == $login && $user['haslo'] == $pass) {
                    echo "Jestem zalogowany!!!";
                    $flag = false;
                    $_SESSION['loginSession'] = $login;
                    mysqli_close($conn);
                    header('location: login.php');
                    // break;
                }
                // else {
                //     echo "Błędnie podałeś login lub hasło.";
                // }
            }

        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="alert alert-danger">
                            <?php
                            if ($flag) echo "Błędnie podałeś login lub hasło.";
                            ?>
                        </p>
                    </div>
                </div>
        <?php
        }
    }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Logowanie</h1>
                </div>
            </div>
            <div class="row">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="login">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Log In</button>
                    <button type="cancel" class="btn btn-primary">Cancel</button>
                </form>
            </div>
        </div>
    <?php } ?>

    <?php include('site/footer.php'); ?>