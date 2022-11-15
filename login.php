<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-dark">
    
<body class="bg-dark">
    <h1 class="text-info text-center p-5">Login</h1>
    <div class="bg-info">
        <h2 class="text-center text-capitalize"></h2><br>
        <div class="container text-center ">
                <form action="../actions/login.php" method="POST">
                <div class="mb-3">
<input type="text" name="Email" class="form-control w-50 m-auto" placeholder="Enter Email address" Required="required">
</div>

<div class="mb-3">
<input type="password" name="password" class="form-control w-50 m-auto"  placeholder="Enter your password" Required="required">
</div>

<div class="mb-1">
<button type="submit" class="btn btn-dark my-2">Login</button>
<h6>Don't have an account? <a href="../partials/index.php">Register Here</a></h6>
</div>
            
</form>
</div>
    </div>
</div>
    
</body>
</html>