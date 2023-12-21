<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:gray;
        }
        h1{
            color:blue;
            font-size:bolder;
        }
        form{
            margin: auto;
            margin-top: 50px;
            width: 500px;
            display: 2;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        button{
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
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
        <center>
        <label for="name"><h1>Role Name<h1></label><br></center>
        <input type="text" name="name" id="name" placeholder="write Role name"><br><br>
        <div class="buttons">
            <button type="reset">CANCEL</button><button type="submit">SAVE</button>
        </div>
    </form>
</body>
</html> -->
<?php 
  include("header.php");
  include("../config/config.php");


  $id='';
  $title='';
  $description='';
  if(isset($_GET['id']) && $_GET['id']>0){
    $id=$_GET['id'];

    $a = $conn->query("select name,description from role where id=".$id);
    //echo $a->num_rows;
    if($a->num_rows>0){
      $c = $a->fetch_assoc();
      $title=$c['name'];
      $description=$c['description'];
    }
  }

 // print_r($_GET);
//add
/*$title='';
$description='';

  if(isset($_GET['id']) && $_GET['id']>0){
    //edit

    $result=$conn->query("select * from role where id=".$_GET['id']);
    //$checkResult ke sath kuch or bhi bhi likh sakte ho
     if($result->num_rows>0)//
     {
     $row=$result->fetch_assoc();
     print_r($row);
     $title=$row['name'];
     $description=$row['description'];

     }

  }

  //select

  if($conn->connect_error){
    echo"failed";
  }
  else{
    echo"pass";
  }*/
?>
<h2>Role Manage</h2>
<form method="POST"action="callback/role.php" enctype="multipart/form-data"><!--this can hide the info.-->
<input type="text" name="title" value="<?php echo $title;?>"  required>
<textarea name="description" ><?php echo $description;?></textarea>
<input type="submit">
</form>


<?php
include("footer.php");
?>
