<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div>
<!-- <form method="get" action="handlesum.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="">
  </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->



<form method="get" action="handleSum.php">
            <div class="mb-3 mt-5">
                <label class="form-label">Number 1</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="num1">
            </div>
            <div class="mb-3">
                <label class="form-label">Number 2</label>
                <input type="text" class="form-control" name="num2">
            </div>
            <button type="submit" class="btn btn-primary mt-3" name="submit">Sum</button>
        </form>





<?php
if(isset($_GET['result'])){
    ?>
<div class="alert alert-dark" role="alert">
 the result of your operation is <?php echo $_GET['result']  ?>
</div>
<?php
}
?>


</body>
</html>