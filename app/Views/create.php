<!-- Create View -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Character</title>
  </head>
  <body>

    <!-- Navbar -->
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/marvel-codeigniter4/app/Snippets/navbar.php';?>

    <!-- Form to create a new character -->
    <div class="container">  
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <h1>Create your favorite character</h1>
            </div>
        </div> 
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
            <form method="POST" action="<?php echo base_URL('/create') ?>"> 
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required/>
                <label for="thumbnailPath">Image Path</label>
                <input type="text" name="thumbnailPath" id="thumbnailPath" class="form-control" required/>
                </br>
                <button class="btn btn-primary">Create</button>
            </form>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>