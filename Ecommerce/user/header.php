<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    session_start();
    $count = 0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }
    ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid font-monospace">
            <a class="navbar-brand pb-2"><img src="logo.png"></a>
            <div class="d=flex">
                <a href="index.php" class="text-decoration-none text-warning  pe-2"><i class="fa fa-house"></i>Home</a>
                <a href="viewcart.php" class="text-decoration-none text-warning  pe-2"><i
                        class="fa-solid fa-cart-plus"></i>Cart(<?php echo $count?>)|</a>
                <span class="text-warning pe-2">
                    <i class="fa-solid fa-user"></i>Hello,
                    <?php
            if(isset($_SESSION['user'])){
             echo $_SESSION['user'];
             echo "
             | <a href='form/logout.php' class='text-decoration-none text-warning  pe-2'><i class='fa-solid fa-arrow-right-to-bracket'></i>Logout</a>
             ";
            }else{
                echo "
               | <a href='form/login.php' class='text-decoration-none text-warning  pe-2'><i class='fa-solid fa-arrow-right-to-bracket'></i>Login</a>
                ";
            }
            ?>


                    <a href="../admin/mystore.php" class="text-decoration-none text-warning  pe-2">Admin</a>
                </span>

            </div>
    </nav>
    </div>
    <div class="bg-danger sticky-top font-monospace">
        <ul class="list-unstyled d-flex justify-content-center">
            <li><a href="laptop.php" class="text-decoration-none text-white fe-bold fs-4  px-5">Laptop</a></li>
            <li><a href="mobile.php" class="text-decoration-none text-white fe-bold fs-4  px-5">Mobile</a></li>
            <li><a href="bag.php" class="text-decoration-none text-white fe-bold fs-4  px-5">Bags</a></li>
        </ul>
    </div>
</body>

</html>