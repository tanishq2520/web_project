<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role</title>
    <style>
        body{
            background:gray;
        }
        </style>
</head>
<body>
    <div class="zero">
    <div class="one">
        <main>
            <center>
    <u style="text-decoration:underline solid red;"><h1 style="color:red;">Role</h1> </ul><u>
    </center>
     </div>
     <div class="save"  style="text-align:right; size:20px;">
            <button class="save" style="background-color:skyblue;">
               Add New Role
            </button>
        </div>
     <div class="two">
     
        <main>
            <h>Show 
        <select>
            <option value ="50">50</option>
            <option value ="51">51</option>
            <option value ="52">52</option>
            <option value ="53">53</option>
            <option value ="54">54</option>
            <option value ="55">55</option>
        </select> entries
       </h>
    
    <div class="three" style="text-align:right;">
<h> Search:
<input type ="text" >
</h>
    </div>
</div>
<br>
<div class="four">
<textarea rows="1" cols="100" name="description" id="description" style="border:2px solid black;">Name:</textarea>
    <textarea rows="1" cols="100" name="description" id="description" style="border:2px solid black;">Admin:</textarea>
</div>
</div> -->

<?php
    include("../config/config.php");
    include("header.php");
    //print_r($_GET);
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml='';
    $result = $conn->query("select * from role");
//    print_r($result);
//     die('fgdffhthtrht'); 
    if($result->num_rows > 0){
       // ech0 $result->num_rows;
       // print_r($finalResult);
       while($row =$result->fetch_assoc()){
        $id = $row['id'];
        $roleHtml .= '
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="role_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
</tr>';
       }
       //print_r($_GET);
    }
?>
<h2>Role</h2>
<?php echo $message?>
<a href="role_manage.php">Add New Role</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
        echo $roleHtml;
        ?>
//         <!-- <tr>
//         <td>1</td>
//         <td>Admin</td>
//         <td>This is boss</td>
//         <td><button>Edit</button>/<button>Delete</button></td>
// </tr> -->
    </tbody>
    </table>
<?php
include("footer.php");
?>