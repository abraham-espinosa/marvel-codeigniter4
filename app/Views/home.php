<!-- Home view -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home | Marvel</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/marvel-codeigniter4/app/Snippets/navbar.php';?>
    <div class="container"> 
      <!-- Search form to filter characters -->
      <div class="row justify-content-md-center">
        <form method="POST" action="<?php echo base_URL('/search') ?>" class="col-md-auto" style="margin: 2rem;">
          <div class="row g-2">
            <div class="col-auto">
              <label for="search" class="visually-hidden">Search</label>
              <input type="search" class="form-control" id="search" name="search" placeholder="search...">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Search</button>
            </div>
          </div>
        </form>
      </div>     
      <div id="responseMessage"></div>
      <!-- Display list of characters -->
      <div class="row">
          <?php foreach($data as $key): ?>
          <div class="card" style="width: 18rem; margin: 1rem;">
          <img <?php echo "src='$key->thumbnailPath'.jpg"?> <?php echo "alt='$key->name'"?> width="300" height="300" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?php echo $key->name?></h5>
              <div>
                <a href="<?php echo base_url('/getCharacter/'.$key->id)?>" class="">Edit</a>
                <a href="<?php echo base_url('/delete/'.$key->id)?>" class="">Delete</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      // Script to display messaga for creating, updating, deleting characters
      let response = '<?php echo $response; ?>';
      if (response == 'created'){
        let div = document.createElement('div');
        div.className = "alert alert-success";
        div.role = "alert";
        div.textContent = "Created Successfully";
        document.querySelector('#responseMessage').appendChild(div);
      }else if (response == 'error'){
        let div = document.createElement('div');
        div.className = "alert alert-danger";
        div.role = "alert";
        div.textContent = "Something went wrong";
        document.querySelector('#responseMessage').appendChild(div);
      }else if (response == 'updated'){
        let div = document.createElement('div');
        div.className = "alert alert-info";
        div.role = "alert";
        div.textContent = "Updated Successfully";
        document.querySelector('#responseMessage').appendChild(div);
      } else if (response == 'deleted'){
        let div = document.createElement('div');
        div.className = "alert alert-info";
        div.role = "alert";
        div.textContent = "Deleted Successfully";
        document.querySelector('#responseMessage').appendChild(div);
      }
    </script>
  </body>
</html>