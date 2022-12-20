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
                <h2>Vous êtes sur la question 3</h2>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <form method="POST" action="response.php">
                    <ol class="list-group">
                        <li class="list-group-item">
                            Question 1 <br>
                            Le nombre de mes lacs est : <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="lacs_plus" name="lacs" value="lacs_plus" required>
                                <label class="form-check-label" for="lacs_plus">> 100 000 lacs</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="lacs_moins" name="lacs" value="lacs_moins" required>
                                <label class="form-check-label" for="lacs_moins">
                                    < 100 000 lacs</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Question 2 <br>
                            Le nom de ma capitale commence par H : <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="capitale_oui" name="capitale" value="capitale_oui" required>
                                <label class="form-check-label" for="capitale_oui">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="capitale_non" name="capitale" value="capitale_non" required>
                                <label class="form-check-label" for="capitale_non">
                                    Non</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Question 3 <br>
                            Mes habitants sont les plus heureux du monde : <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="content_oui" name="content" value="content_oui" required>
                                <label class="form-check-label" for="content_oui">Oui</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="content_non" name="content" value="content_non" required>
                                <label class="form-check-label" for="content_non">
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