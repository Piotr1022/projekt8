<?php 
    include('site/header.php'); 
?>

<?php

    if(isset($_POST['submit']) && $_POST['kod']==$_POST['codesave']){

            $wiadomosc="Wiadomosc od (nazwa); <strong>";
            $wiadomosc .=$_POST['imie'];
            $wiadomosc .="</strong>\n";
            $wiadomosc .="Mail nadawcy: <strong>";
            $wiadomosc .=$_POST['mail'];
            $wiadomosc .="</strong>\n";
            $wiadomosc .="Temat wiadomości: <strong>";
            $wiadomosc .=$_POST['temat'];
            $wiadomosc .="</strong>\n";
            $wiadomosc .="Tresc wiadomosci:";
            $wiadomosc .=$_POST['wiadomosc'];
            
            $charSet = "UTF-8";
            $userName = "nazwa@gmail.com";
            $port = 587;
            $mailSubject = $_POST['temat'];

            $header = "Content-type: text/html; charset=" . $charSet . " \r\n";
            $header .= "From: " . $_POST['imie'] . " <" . $_POST['imie'] . "> \r\n";
            $header .= "MIME-Version: 1.0 \r\n";
            $header .= "Content-Transfer-Encoding: 8bit \r\n";
            $header .= "Date: " . date("r (T)") . " \r\n";
            $header .= iconv_mime_encode("Subject", $mailSubject);
            // Send mail
            $success = mail($userName, $mailSubject, $wiadomosc, $header);

            if (!$success) {
                $komunikat = "Twoja wiadmość nie została wysłana.";
                print "$komunikat";
             } else {
                $komunikat = "Dziekujemy za wysłaną wiadomość! Odezwiemy się w ciągu 24 godzin.";
                print "$komunikat";
            }     
        ?>
            <h1 class="maintitle">Mail został wysłany</h1>
<?php
    } else {
?>

<br>
<br>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="container">

        <div class="row justify-content-start">
            <div class="col-xl-2 col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Imię i Nazwisko:</label>
            </div>
            <div class="col-xl-4 col-md-8">
                <input type="text"  id="exampleFormControlInput1" class="form-control" placeholder="Jan Kowalski" name="imie">
            </div>
        </div>

        <br>

        <div class="row justify-content-start">
            <div class="col-xl-2 col-md-4">
                <label for="exampleFormControlInput1" class="form-label">E-mail:</label>
            </div>
            <div class="col-xl-4 col-md-8">
                <input type="email"  id="exampleFormControlInput1" class="form-control" placeholder="jan@kowalski.pl" name="mail">
            </div>
        </div>

        <br>

        <div class="row justify-content-start">
            <div class="col-xl-2 col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Temat wiadomości:</label>
            </div>
            <div class="col-xl-4 col-md-8">
                <input type="text"  id="exampleFormControlInput1" class="form-control" placeholder="Wpisz temat wiadomości" name="temat">
            </div>
        </div>

        <br>

        <div class="row justify-content-start">
            <div class="col-xl-2 col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Wiadomość: </label>
            </div>
            <div class="col-xl-4 col-md-8">
                <textarea  id="exampleFormControlInput1" class="form-control" rows="3" placeholder="Wpisz treść wiadomości" name="wiadomosc"></textarea> 
            </div>
        </div>

        <br>

        <div class="row justify-content-start">
            <div class="col-xl-2 col-md-4 alert alert-success text-center">
                <?php
                    $tmp='';
                    $kod = array();
                    for($i=0; $i<4; $i++){
                        $kod[] = rand(0,9);
                        echo $kod[$i];
                        $tmp .= $kod[$i];
                    }

                    // print_r($kod);
                    // echo rand(0,9);
                    // echo rand(0,9);
                    // echo rand(0,9);
                    // echo rand(0,9);
                ?>
                <input type="hidden" name="codesave" value="<?php echo $tmp ; ?>">
                <!-- <br>Dodać zabezpieczenie do wiadomości: -->
            </div>
            <div class="col-xl-4 col-md-8">
                <input type="text"  id="exampleFormControlInput1" class="form-control" placeholder="Wpisz kod do wysłania" name="kod">
            </div>
        </div>

        <br>

        <div class="row justify-content-start">
            <div class="col-xl-2 col-md-4">
                <button type="submit" class="btn btn-primary" name="submit">Wyślij</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>
        </div>

    </div>
</form>

<?php
    }
?>

<?php
    include('site/footer.php');
?>