<!--<!DOCTYPE html>
<html>
<head>
    <title>Manage Category</title>
    <link rel="stylesheet" type="text/css" href="category.css">
</head>
<body>
    <h1>Manage Category</h1>
    <form action="save_category.php" method="post" enctype="multipart/form-data">
        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name" required>
        <br><br>
        <label for="category_description">Category Description:</label>
        <textarea id="category_description" name="category_description" required></textarea>
        <br><br>
        <label for="category_image">Category Image:</label>
        <input type="file" id="category_image" name="category_image" required>
        <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>-->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:skyblue;
        }
        form{
            margin: auto;
            margin-top: 50px;
            width: 600px;
            padding: 40px;
            border: 10px solid black;
            background:#f2f2f2;
        }
        input{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        textarea{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        input[type="checkbox"]{
            width: 15px;
            height: 15px;
            margin: 0;
        }
        button{
            padding: 10px;
            margin: 10px;
            width: 200px;
            border: 1px solid black;
            border-radius: 6px;
            color: black;
            font-weight: 700;
        }
        button[type="reset"]{
            background-color: yellow;
        }
        button[type="submit"]{
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <form action="">
        <label for="name">Category Name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Category name">
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
        <label for="image">Image</label><br>
        <input type="file" name="image" id="image">
        <label for="status">Status</label>
        <input type="checkbox" name="status">
        <div class="buttons">
            <button type="reset">CANCEL</button><button type="submit">SAVE</button>
        </div>
    </form>
</body>
</html> -->

<?php
    include("../config/config.php");
    include("header.php"); 
    print_r($_GET);

    $title='';
    $detail='';
    
      if(isset($_GET['id']) && $_GET['id']>0){
        //edit
    
        $result=$conn->query("select * from catergory where id=".$_GET['id']);
        //$checkResult ke sath kuch or bhi bhi likh sakte ho
         if($result->num_rows>0)//
         {
         $row=$result->fetch_assoc();
         print_r($row);
         $title=$row['name'];
         $detail=$row['detail'];
         }
        }
    if($conn->connect_error){
        echo'failed';
    }else{
        echo'pass';
    }
    // select
?>
<h2>catergory Manage</h2>
<form method="post" action="callback/catergory.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="text" name="detail">
<input type="submit">
</form>


<?php
    include("footer.php");
?>