<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>tugas 3 yusnia</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-mt-3">
                <div class="card-header text-center">
                    <h2>Operator aritmatika</h2>
                    <p>20202205084 - yusnia fikasari</p>
                      <?php
                        date_default_timezone_set ('Asia/Makassar');
                        echo date ('1, d F H:i:s');
                      ?>
                </div>
                <form action="proses.php" method="post">
                    <div class="row mb-3">
                        <label for="inputnumber3" class="col-sm-2 col-form-label" >Angka Pertama</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputangka1" name="angka1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputnumber3" class="col-sm-2 col-form-label">Angka Kedua</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputangka2" name="angka1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" id="btnSimpan" onclicl = "notif()" >HITUNG</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="notif.js"></script> 
</body>
</html>