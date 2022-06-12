<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    include("mystore.php");
        $con = mysqli_connect("localhost","root","","ecommerce");
        $record = mysqli_query($con,"SELECT * FROM `tbluser`");
        $row_count = mysqli_num_rows($record);
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">



                <table class="table table-secondary-bordered">
                    <thead class="text-center">
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                        <a href=""></a>
                    </thead>
                    <tbody class='text-center text-danger'>
            <?php
            $i=0;
               while($row = mysqli_fetch_array($record)){
                echo "
             <tr>
                <td>";?><?php echo ++$i;?><?php echo "</td>
                <td>$row[UserName]</td>
                <td>$row[Email]</td>
                <td>$row[Number]</td>
                <td><a href='delete.php? ID=$row[id]' class='btn btn-outline-danger'>Delete</a></td>
            </tr>
            ";

               }

            ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2 pr-5 text-center">
                <h3 class="text-danger">Total</h3>
                <h1 class="bg-danger text-white"><?php echo $row_count?></h1>
            </div>
        </div>
    </div>
</body>

</html>