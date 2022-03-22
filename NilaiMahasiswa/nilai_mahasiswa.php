<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nilai Mahasiswa</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Web</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Review PHP <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text" /> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">PHP05 <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="https://www.instagram.com/ahnafmusyafa/" id="navbarDropdownMenuLink" data-toggle="dropdown">Instagram saya</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider">
								</div> <a class="dropdown-item" href="#">Separated link</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
    <!-- Tittle  -->
    <br>
    <h2 class="ml-5">Form Nilai Ujian</h2>
    <br>
    <form method="post" action="">
    <div class="container">
        <div class="container-fluid">
            <form>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nim" name="nim" type="number" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matakuliah" name="matakuliah" class="custom-select">
                    <option value="matematika">Matematika</option>
                    <option value="bahasa1">Bahasa Inggris</option>
                    <option value="bahasa2">Bahasa Indonesia</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </form>
    <div class="m-5 border border-primary p-4 rounded">
    <?php
        error_reporting(0);
        require_once 'class_nilaimahasiswa.php';

        $mahasiswa = new nilai_mahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);
        if(isset($_POST['submit'])){
            echo "<hr>";
            echo "NIM : ".$nim = $_POST['nim'];
            echo "<br>Mata Kuliah : ".$matakuliah = $_POST['matakuliah'];
            echo "<br>Nilai : ".$nilai = $_POST['nilai'];
            echo "<br>Hasil Ujian : ".$mahasiswa->grade();
            echo "<br/>Grade : " .$mahasiswa->hasil();
        }
    ?>
    </div>
        <footer class=" bg-light text-muted fixed-bottom">
        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
            <div>
            <p><b>Pemrograman Web </b>| Mahasiswa : Ahnaf Musyaffa Bisyri Hendro Subagio | STT NF - 2022</p>
            </div>
        </div>
        </footer>
</body>
</html>