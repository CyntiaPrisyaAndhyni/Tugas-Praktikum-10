<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
   <meta http-equiv=""X-UA-Compatible" content=""IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>PESAN ALUMNI</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    .container{ width: 100%;}
    body {
        padding-left: 20%;
        background-image: url("img.jpg");
        }
</style>
</head>
<body>
    <div class="card col-md-10">
    <div class="card-header text-center">
    <div class="container">
    <div class="from-group">
            <h2 class="alert alert-warning text-center">
                DAFTAR PESAN ALUMNI
            </h2>
        </div>
    <br>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">posted</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Tahun Lulus</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pesanalumni";
            $query = mysqli_query($conn,$sql);

            while ($pesanalumni = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pesanalumni['id']."</td>";
                echo "<td>".$pesanalumni['posted']."</td>";
                echo "<td>".$pesanalumni['name']."</td>";
                echo "<td>".$pesanalumni['email']."</td>";
                echo "<td>".$pesanalumni['address']."</td>";
                echo "<td>".$pesanalumni['tahunlulus']."</td>";
                echo "<td>".$pesanalumni['pekerjaan']."</td>";
                echo "<td>".$pesanalumni['message']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
    <nav>
        <a href="menu.php">kembali</a>
    </nav>
    <br>
    </div></div></div>
</body>
</html> 