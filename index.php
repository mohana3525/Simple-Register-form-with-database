<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-5">Registration form</h1>
    <div class="bg-info">
        <h2 class="text-center text-capitalize">Enter your details</h2><br>
        <div class="container text-center">
<form action="../actions/register.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
<input type="text" name="name" class="form-control w-50 m-auto" placeholder="Enter your name" Required="required">
</div>
<div class="mb-3">
<input type="text" name="address" placeholder="Enter your address" class="form-control w-50 m-auto" required="required">
</div>
<div class="mb-3">
<input type="text" name="phone" placeholder="Enter your Mobile number" class="form-control w-50 m-auto" required="required" maxlength="10 minlength="10">
</div>
<div class="mb-3">
<input type="text" name="Mail" placeholder="Enter your mail" class="form-control w-50 m-auto" required="required">
</div>
<div class="mb-3">
<input type="password" name="password" class="form-control w-50 m-auto"  placeholder="Enter your password" Required="required">
</div>
<div class="mb-3">
<input type="password" name="password1" class="form-control w-50 m-auto"  placeholder="Conform your password" Required="required">
</div>

<div class="mb-1">
<button type="submit" class="btn btn-dark my-2">Submit</button>
<h6>You have a account? <a href="../partials/login.php">login</a></h6>
</div>


</form>

        </div>
</div>
    
</body>
</html>