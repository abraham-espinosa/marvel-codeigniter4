<?php 
  // Input values to be updated
  $id = $values[0]['id'];
  $name = $values[0]['name'];
  $thumbnailPath = $values[0]['thumbnailPath'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Character</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/marvel-codeigniter4/app/Snippets/navbar.php';?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <h1>Update your character</h1>
            </div>
        </div> 
        <div class="row justify-content-md-center">
            <div class="col-sm-6">
                <form method="POST" action="<?php echo base_URL('/update') ?>"> 
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>" required/>
                    <label for="thumbnailPath">Image Path</label>
                    <input type="text" name="thumbnailPath" id="thumbnailPath" class="form-control" value="<?php echo $thumbnailPath ?>" required/>
                    <input type="text" name="id" id="id" value="<?php echo $id ?>" hidden="">
                    </br>
                    <button class="btn btn-warning">Update</button>
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