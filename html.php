

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='author' content="Sebastian Siarczyński">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tworzenie WWW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section class="container">
        <article class="row">
            <section class="col">
              <h1>Glosowanie na przewodniczacego</h1>
              <form class="form-group" method="GET" action="">
                <div>
                  <input type="number" placeholder="Wpisz ID..." class="form-control" name="ID" />
                </div>
                <div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Person" id="option1" value="Adam">
                    <label class="form-check-label" for="Option1">Adam</label>
                  </div>
                  <div>
                    <input class="from-check-input" type="radio" name="Person" id="option2" value="Jan">
                    <label class="form-check-label" for="option2">Jan</label>
                  </div>
                </div>
                <div>
                  <button type="submit" class="btn btn-success">Glosuj</button>
                </div>
              </form>
              <div class="alert">
                <?php
                  $message = "<p class='alert alert-info'>Wprowadz dane</p>";
                  if($_GET["ID"] && $_GET["Person"] && is_numeric($_GET["ID"]) && strlen($_GET["ID"]) == 6 && intval($_GET["ID"]) % 7 == 0){
                    echo $message = "<p class='alert alert-success'>Oddany glos</p>";
                  }else{
                    echo $message;
                  }
                 ?>
              </div>
            </section>
        </article>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
