<?php
include 'functions.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container text-center py-4">
            <h1 class="fw-bold">Strong Password Generator</h1>
            <h3 class="text-white">Genera una password sicura</h3>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="output my-3 py-3 text-center w-75 mx-auto rounded-2">
            <?php     
                genPassword($length,$dataLength,$data)    
                 ?>
            </div>
            <form action="" class="w-75 mx-auto p-4 rounded-2">
                <div class="cont_length d-flex justify-content-between">
                    <label for="length">Lunghezza password:</label>
                    <input type="text" name="length" id="length">
                </div>
                <div class="repetitions d-flex justify-content-between my-3">
                    <label for="repetitions">Consenti ripetizioni di uno o più caratteri:</label>
                    <div class="cont_radio d-flex flex-column">
                        <div class="si d-flex">
                            <input type="radio" name="repetitions" value="si" id="si">
                            <label class="mx-2" for="si">Si</label>
                        </div>
                        <div class="no d-flex">
                            <input type="radio" name="repetitions" value="no" id="no">
                            <label class="mx-2" for="no">No</label>
                        </div>
                    </div>
                </div>
                <div class="options d-flex flex-column align-items-end">
                    <div class="option_1">
                        <input type="checkbox" name="lettere" id="lettere" class="me-1">
                        <label for="lettere" class="mx-2">Lettere</label>
                    </div>
                    <div class="option_2">
                        <input type="checkbox" name="numeri" id="numeri">
                        <label for="numeri" class="mx-2">Numeri</label>
                    </div>
                    <div class="option_3">
                        <input type="checkbox" name="simboli" id="simboli">
                        <label for="simboli" class="mx-2">Simboli</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Invia</button>
                <button type="reset" class="btn btn-danger">Annulla</button>
            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>