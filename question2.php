<?php
if (isset($_POST['submit'])) {
    print_r($_POST);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quizz</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center bg-light p-4">
            <h2 style="padding-bottom: 50px">Bienvenu dans notre Quizz !!!</h2>
            <h3 class="text-primary">Quel pays suis-je?</h3>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <h2>Vous êtes sur la question 2</h2>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <form method="POST" action="question3.php">
                    <ol class="list-group">
                        <li class="list-group-item">
                            Question 1 <br>
                            Le bombre des mes habitants : <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="plus" name="habitants" value="plus" required>
                                <label class="form-check-label" for="plus">> 5 Millions d'habitants</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="moins" name="habitants" value="moins" required>
                                <label class="form-check-label" for="moins">
                                    < 5 Millions d'habitants</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Question 2 <br>
                            J'ai participé à la coupe de monde 2022 : <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="coupe_oui" name="coupe" value="coupe_oui" required>
                                <label class="form-check-label" for="coupe_oui">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="coupe_non" name="coupe" value="coupe_non" required>
                                <label class="form-check-label" for="coupe_non">
                                    Non</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Question 3 <br>
                            Mes habitants sont les plus grand buveurs de café au monde : <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="cafe_oui" name="cafe" value="cafe_oui" required>
                                <label class="form-check-label" for="cafe_oui">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="cafe_non" name="cafe" value="cafe_non" required>
                                <label class="form-check-label" for="cafe_non">
                                    Non</label>
                            </div>
                        </li>
                    </ol>
                    <button class="btn btn-primary m-3" type="submit" name="submit">Enovyer</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>