<?php
include('init.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body{
background-color: #000000bf;
}

.container {
    background-color: #fbfbfb6e;
    width:500px;
    text-align: center;
    margin: auto;
    padding: 5px;
    border-radius: 20px;
    margin-top: 30px;
}

.container h1 {
    font-size: 40px;
    color: #757575;
    margin-top: 5px;
}

.container .label {
    /* color: #9c9c9c; */
    color: #ccc;
    font-size: 19px;
    margin-right: 260px ;
    margin-bottom: 0;
}

.container input {
    height: 50px;
    width: 400px;
    border-radius: 10px;
    font-size: 16px;
    border: 1px solid #cfcfcf;
    margin: 15px;
    padding-left: 10px;
}

.container button {
    width: 420px;
    height: 60px;
    border-radius: 10px;
    background-color: #2a5a8a;
    color: #f2ffff;
    font-size: 20px;
    padding: 6px;
    margin-top: 10px;
}
</style>
</head>

<body>

<div class="container">
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$sql = "INSERT INTO cata (`ID`, `Catagory_Image`, `link`  ,`Catagory_Description`) VALUES (NULL, :picture ,:link,:title )";
$statement = $connection->prepare($sql);
$statement->execute(array(

    ':title' => $_POST['title'],
    ':link' =>$_POST['link'],
    ':picture' => $_POST['picture'],
    
    
));
}
 ?>

        <a href="index.php">Home page</a>
        <form action="Products.php" Method="POST">

        <h1>Add Products</h1>

        <label for="" class="label">Product Description</label><br><br>
      <textarea name="title" id="" cols="30"  rows="10" ></textarea><br>

        <label for="" class="label" style="margin-right: 315px;">Page link</label><br>
        <input type="text" name="link">

        <label for="" class="label" style="margin-right: 315px;">Product Image</label><br>
        <input type="text" name="picture">

        <button>submit</button>

        
        </form>
</div>    

</body>

</html>
