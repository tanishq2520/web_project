<!-- <!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: gray;
            margin: 0 auto;
            margin-top: 100px;
            border: 3px solid black;
            border-radius: 3px;
        }

        .two {
            color: green;
            decoration:green;
        }

        input[type=text], input[type=file], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type=submit]:hover {
            opacity: 0.8;
        }
    </style>
<center>
    <h1><u>Add Product</u></h1> </center>
    <table border="4px" align="center" cellspacing="1" ><hr>
        <td><b>1</b></td>
    </table>
    <div class="two" align="right">
       <b><u> Add new varient</b></u>
    </div>
    <h2 align="center" style="color:red;"><i>Select Category</i></h2>
       <form action="add_product.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <center>
            <button type="submit" name="submit" style="border:2px solid black; background:skyblue;">Add Product</button></center>
        </div>
    </form>
</body>
</html> -->

<!-- <?php
echo'<pre>';
print_r($_POST);
print_r($_files);
?> -->

<?php
    include("../config/config.php");
    include("header.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml='';
    $result = $conn->query("select * from catergory");

    if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){

            $id = $row['id'];
            $roleHtml .= '
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['detail'].'</td>
            <td><a href="catergory_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
    </tr>';
        }
    }
?>
<h2>catergory</h2>
<?php echo $message?>
<a href="catergory_manage.php">Add New catergory</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>detail</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        echo $roleHtml;?>
        <!-- <tr>
            <td>1</td>
            <td>Admin</td>
            <td>this is my class</td>
            <td><button>Edit</button>/<button>Delete</button></td>
    </tr> -->
    </tbody>
    </table>
<?php
include("footer.php");
?>