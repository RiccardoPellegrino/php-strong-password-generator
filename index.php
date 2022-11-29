<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrongPassword</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body class="bg-dark text-white ">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="mt-5">
            <h1 class="text-white-50">Strong password Generator</h1>
            <h2 class="text-center">Generauna password sicura</h2>
        </div>
        <div class="bg-white text-black d-flex flex-column justify-content-center align-items-center"
            style="width: 800px;border-radius: 5px;">
            <form action="index.php" method="GET">
                <div class="mb-3 d-flex mt-5">
                    <div>
                        <p>Lunghezza Password:</p>
                    </div>
                    <div>
                        <input type="number" class="form-control ms-5" name="password">
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <div>
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                    </div>
                    <div class="ms-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault">
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                        <div class="form-check mt-5">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckChecked">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </form>
        </div>
    </div>
</body>

</html>