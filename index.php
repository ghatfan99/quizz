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
        <form method="POST" action="question2.php">
          <ol class="list-group">
            <li class="list-group-item" id="p1_question1">
              Question 1 <br>
              Dans quel continent je suis? <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="asie" name="contenet" value="asie" required onclick="contenetQ()">
                <label class="form-check-label" for="asie">l'Asie</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="europe" name="contenet" value="europe" required onclick="contenetQ()">
                <label class="form-check-label" for="europe">l'Europe</label>
              </div>
            </li>
            <li class="list-group-item d-none" id="p2_question2">
              Question 2 <br>
              J'ai une superficie : <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="plus" name="superficie" value="plus" required>
                <label class="form-check-label" for="plus">> 300 k km^2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="moins" name="superficie" value="moins" required>
                <label class="form-check-label" for="moins">
                  < 300 k km^2</label>
              </div>
            </li>
            <li class="list-group-item d-none">
              Question 3 <br>
              J'ai des côtes sur la mer méditerranée : <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="oui" name="cotes" value="oui" required>
                <label class="form-check-label" for="oui">Oui</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="non" name="cotes" value="non" required>
                <label class="form-check-label" for="non">
                  Non</label>
              </div>
            </li>
          </ol>
          <button class="btn btn-primary m-3 d-none" type="submit" name="submit">Enovyer</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Local javasvript file -->
  <script src="script.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>