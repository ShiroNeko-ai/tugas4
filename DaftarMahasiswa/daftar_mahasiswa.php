<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daftar Mahasiswa</title>
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
<br>

<div class="container">
    <div class="container-fluid">
        <div>
            <p>Show Entries</p> 
            <input type="number">
            <form class="d-flex float-end">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<?php
require_once 'class_mahasiswa.php';

    $mahasiswa1 = new Mahasiswa ("02011", "Faiz Fikri");
    $mahasiswa1->prodi = "TI";
    $mahasiswa1->thn_angkatan=2012;
    $mahasiswa1->ipk=3.8;

    $mahasiswa2 = new Mahasiswa ("02012", "Alissa Khairunnissa");
    $mahasiswa2->prodi = "TI";
    $mahasiswa2->thn_angkatan=2012;
    $mahasiswa2->ipk=3.9;

    $mahasiswa3 = new Mahasiswa ("01011", "Rosalie Naurah");
    $mahasiswa3->prodi = "SI";
    $mahasiswa3->thn_angkatan=2010;
    $mahasiswa3->ipk=3.46;

    $mahasiswa4 = new Mahasiswa ("01012", "Defgi Muhammad");
    $mahasiswa4->prodi = "SI";
    $mahasiswa4->thn_angkatan=2010;
    $mahasiswa4->ipk=3.2;

    $array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];

?>

<div class="container-fluid position-absolute top-25 left-25">
			<h3 class="text-center">Daftar Nilai Mahasiswa</h3>
			<table class="table table-light table-striped table-hover text-center w-25 m-auto shadow">
				<thead>
				<tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $counter = 1;
            foreach ($array_mhs as $mahasiswa) {
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mahasiswa->nim.'</td>'.
                '<td>'.$mahasiswa->nama.'</td>'.
                '<td>'.$mahasiswa->prodi.'</td>'.
                '<td>'.$mahasiswa->thn_angkatan.'</td>'.
                '<td>'.$mahasiswa->ipk.'</td>'.
                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
                $counter++;
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
        <footer class=" bg-light text-muted fixed-bottom">
        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
            <div>
            <p><b>Pemrograman Web </b>| Mahasiswa : Ahnaf Musyaffa Bisyri Hendro Subagio | STT NF - 2022</p>
            </div>
        </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>