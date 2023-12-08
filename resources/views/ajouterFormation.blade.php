<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ajout Formation</title>
  </head>
  <body>
    <div class="container py-4">
    <div class='row mt-2'> <h1 class="text-center">FORMATION</h1></div>
        <div class="row ">
            <div class="col ">
            <form action="{{ route('saveF')}}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="exampleInputNom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Domaine</label>
                    <input type="text" class="form-control" id="exampleInputDomaine" name="domaine">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Spécialité</label>
                    <input type="text" class="form-control" id="exampleInputSpecialite" name="specialite">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Durée</label>
                    <input type="number" class="form-control" id="exampleInputDuree" name="duree">
                </div>
                <button type="submit" class="btn btn-primary">ajouter</button>
                <a href="http://127.0.0.1:8000/Formation" class="btn btn-success">Liste des formations</a>
            </form>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>