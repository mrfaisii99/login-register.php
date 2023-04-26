<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>






<form action="handle_register.php" class="container card card-body mt-5" method="post" enctype="multipart/form-data">
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">name</label>
<div class="col-sm-10">
<input type="text" name="un" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your name ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">age</label>
<div class="col-sm-10">
<input type="number" name="ua" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your age ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">address</label>
<div class="col-sm-10">
<input type="text" name="uadd" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" name="ue" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your Email Address ">
</div>
</div>
<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">password</label>
<div class="col-sm-10">
<input type="password" name="up" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter Your password ">
</div>
</div>
<div class="form-group row">

<div class="col-sm-10">
<input type="file" name="ui" class="form-control form-control-sm" id="colFormLabel">
</div>
</div>

<button type="submit" name="form">register</button>
</form>






















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>