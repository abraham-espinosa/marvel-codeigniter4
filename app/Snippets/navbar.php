<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #ff0000;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('/')?>"><img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Marvel_Logo.svg/800px-Marvel_Logo.svg.png" class="d-inline-block align-text-top" style="width: 6rem;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/createForm')?>">Create Mavel Character</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quick Links
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://developer.marvel.com/" target="_blank">Marvel Developer</a></li>
            <li><a class="dropdown-item" href="https://www.marvel.com/corporate/about" target="_blank">Marvel Corporate</a></li>
          </ul>
        </li>
      </ul>
      <span class="navbar-text">
        Developed by Abraham Espinosa 
      </span>
    </div>
  </div>
</nav>