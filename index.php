<?php
session_start();
$psd_lgt = $_GET["psd"] ?? "";
include __DIR__ . "/partials/functions.php";

if ($psd_lgt === "") {
    $casual_psd = "";
} else {
    $casual_psd = randomPassword($psd_lgt);
}

$_SESSION['psd'] = $casual_psd;
?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Strong password</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center">
        <section>
            <form action="index.php" method="GET">
                <label for="password"></label>
                <h1>Strong password Generator</h1>
                <h2 class="text-center">Genera una password sicura</h2>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="alert <?php echo $psd_lgt !== "" ? "alert-success" : "" ?>">
                        <?php if ($psd_lgt === "") {
                            echo "Inserisci lunghezza password";
                        } else {
                            echo "Password generata correttamente";
                        }
                        ?>
                    </div>
                    <input type="text" name="psd" id="password">
                    <div class="mt-3">
                        <button type="submit">Invia</button>
                        <button type="reset">Reset</button>
                    </div>
            </form>
            <div class="alert mt-5">
                <a href="password.php">Vai alla tua Password</a>
            </div>
    </div>
    </section>
    </div>
</body>

</html>