<?php
include('bd.php');
$queri = "SELECT * FROM uici ";
$fai = mysqli_query($conn,$queri);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h1 align="center"><b>Notification UICI</b></h1>
<div class="card">
   
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>N°</th>
                                <th>email</th>
                                <th>auteur </th>
                                <th>subjestion</th>
                                <th>messages</th>
                                <th>date de publication</th>
                                <!-- <th>Action</th> -->
                            </tr>
                            <?php
                            
                            while($a = mysqli_fetch_assoc($fai)){
            if(isset($a['firstname'])){
          
        ?>
                            <tr>
                                <td><?= $a['iduici'] ?></td>
                                <td><?= $a['email'] ?></td>
                                <td><?= $a['firstname'] ?></td>
                                <td><?= $a['subjection'] ?></td>
                                 <td><?= $a['messages'] ?></td>
                                 <td><?= $a['reg_date'] ?></td>
                            </tr>
                            <?php
            
        }else{
   
                            ?>
                            <tr>
                                <td colspan="5">No Data Found</td>
                            </tr>
                           <?php
                           }
                        }
                           ?>
                        </table>
                    </div>
                </div>
            </div>

<?php

?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
