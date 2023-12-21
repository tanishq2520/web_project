<?php
    include("../config/config.php");
    include("header.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml='';
    $result = $conn->query("select * from employee");

    if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){

            $id = $row['id'];
            $roleHtml .= '
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email_id'].'</td>
        <td><a href="employee_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
</tr>';
    }
    }
?>
<h2>Employee</h2>
<a href="employee_manage.php">Add New employee</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>email_id</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        echo $roleHtml;?>
        <!-- <tr>
            <td>1</td>
            <td>Admin</td>
            <td>@gmail.com</td>
            <td><button>Edit</button>/<button>Delete</button></td>
    </tr> -->
    </tbody>
    </table>
<?php
include("footer.php");
?>