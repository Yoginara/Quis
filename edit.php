<?php
require 'functions.php'

// ambil data url
$id = $_GET["id"];

// query data pegawai
$pegawai = query("SELECT * FROM pegawai WHERE id= $id")[0];


if( isset($_POST["submit"]) ) {
    // retrieve data from each element in the form
        $nomor = $_POST["Nomor_Identitas"];
        $nama= $_POST["Nama"];
        $gender = $_POST["Jenis_Kelamin"];
        $kelahiran = $_POST["Tempat_dan_Tanggal_Lahir"];
        $jabatan = $_POST["Jabatan"];
        

    // query insert data
        $query = "INSERT INTO pegawai
                    VALUES
                ('', '$nomor', '$nama', '$gender','$kelahiran', '$jabatan' )    
                ";
        
        mysqli_query($connect, $query); 
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
</head>
<body>
<section class="h-100">
      <div class="container h-100">
        <div class="row justify-content-sm-center h-100 mb-5">
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">
              <img src="logo.png" alt="logo" width="200" /> 
            </div>
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4">Ubah Data Pegawai</h1>
                <form  action="" method="post" class="needs-validation" >
                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Nomor_Identitas">Nomor Induk :</label>
                    <input id="Nomor_Identitas" type="text" class="form-control" name="Nomor_Identitas"  required value="<?=$pegawai["Nomor_Identitas"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Nama">Nama :</label>
                    <input id="Nama" type="text" class="form-control" name="Nama" value="<?=$pegawai["Nama"];?>" />
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Jenis_Kelamin">Jenis Kelamin :</label>
                    <input id="Jenis_Kelamin" type="text" class="form-control" name="Jenis_Kelamin" value="<?=$pegawai["Jenis_Kelamin"];?>"/>
                  </div>

                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Tempat_dan_Tanggal_Lahir">Kelahiran :</label>
                    <input id="Tempat_dan_Tanggal_Lahir" type="text" class="form-control" name="Tempat_dan_Tanggal_Lahir" value="<?=$pegawai["Tempat_dan_Tanggal_Lahir"];?>" />
                  </div>
                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="Jabatan">Jabatan :</label>
                    <input id="Jabatan" type="text" class="form-control" name="Jabatan" value="<?=$pegawai["Jabatan"]; ?>" />
                  </div>

                  <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary ms-auto" name="submit">Ubah Data</button>
                  </div>
                </form>
              </div>
              <div class="card-footer py-3 border-0">
                <div class="text-center"> Penambahan Data Harus Sesuai !!</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>