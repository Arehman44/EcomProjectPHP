<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto bg-white shadow font-monospace border boder-info my-5">
                <p class='text-warning text-center fs-3 fw-bold my-3'>User Login</p>
                <form action="login1.php" method="post">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name='name' placeholder="Enter User Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">UserPassword:</label>
                        <input type="password" name='password' placeholder="Enter User Password" class="form-control">
                    </div>
                    <div class='mb-3'>
                        <button class='w-100 bg-danger fs-4 text-white' name='submit'>Login</button>
                    </div>
                    <div class='mb-3'>
                        <button class='w-100 bg-warning fs-4 text-white' name='submit'><a href="register.php" class='text-decoration-none text-white'>Register</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>