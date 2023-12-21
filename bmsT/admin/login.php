<!-- <!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: white;
  font-family : Arial, sans-serif;
}

h1 {
  color: #333;
  text-align: center;  
}

.signup-box {
  width: 320px;
  padding: 20px;
  background-color: gray;
  margin: 80px auto;
  border: 1px solid #ccc;
  box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
}

input[type="text"], input[type="email"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0; 
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: red;
  color: blue;
  padding: 10px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;  
}

button:hover {
  background-color: #45a049;
}
</style>  
</head>

<body>
<h1>Sign Up</h1>

<div class="signup-box">
  <h2>Create an Account</h2>
  
  <form>
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="last">Last Name</label>
    <input type="text" id="last name" name="last name">

    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="short name"required>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="please give email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="write password" required>
    <button><a href="..\">Sign Up</a></button>
  </form>
</div>
</body>
</html> -->

<?php
include("header.php");
?>
<h2>login</h2>
<form method="post" action="catergory.php" enctype="multipart/form-data">
<input type="text" name="username">
<input type="password" name="password">
<input type="file" name="profileimage">
<input type="submit">
</form>
<?php
include("footer.php");
?>