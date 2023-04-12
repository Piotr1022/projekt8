<?php
    include('site/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <h1>ZALOGUJ SIĘ</h1>
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