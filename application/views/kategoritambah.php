<!doctype html>
<html lang="en">

<head>
  <title>Parkir SWK</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
       
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=base_url()?>index.php/Home" aria-current="page">Dashboard <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataParkir">Data Parkir</a>
                </li>
                <?php if ($this->session->userdata("userdata")->role == "admin"){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataCustomer">Data Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/Kategori">kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/DataAdmin">Data Admin</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>index.php/Login">Keluar</a>
                </li>

            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
  </header>
  <main class="container">
    <form action="<?=base_url()?>index.php/Kategori/tambah_proses" method="post">
      <div class="mb-3">
        <label for="" class="form-label">nm_kategori</label>
        <input type="text"
          class="form-control" name="nm_kategori" id="" aria-describedby="nm_kategori" placeholder="">
      </div>
      <div class="mb-3">
      
        <label for="" class="form-label">harga_1jam</label>
        <input type="text"
          class="form-control" name="harga_1jam" id="" aria-describedby="harga_1jam" placeholder="">
        
       
          <?php foreach ($this->db->get('member')->result() as $key) { ?>
           
          <?php } ?>
        </select>
      </div>
      <input name="" id="" class="btn btn-primary" type="submit" value="Simpan">
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="<?=base_url()?>assets/js/bootstrap.min.js">
  </script>
</body>

</html>