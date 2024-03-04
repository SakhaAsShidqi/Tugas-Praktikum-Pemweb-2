<?php 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill']; 
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi - Terima Kasih</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1>Terimakasih telah mendaftarkan di IT Club</h1>
        <h5>Nim : <?php echo $nim ?></h5>
        <h5>Nama Lengkap :  <?php echo $nama ?></h5>
        <h5>Jenis Kelamin : <?php echo $jeniskelamin ?></h5>
        <h5>Prodi : <?php echo $prodi ?></h5>
        <h5>Skill Web dan Programming : <?php echo $skill ?></h5>
        <h5>Tempat Domisili : <?php echo $domisili ?></h5>
        <h5>Email : <?php echo $email ?></h5>
    </div>
</body>
</html