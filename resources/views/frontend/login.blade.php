<!doctype>
<!DOCTYPE html>
<html>
<head>
    <title>log in</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>



<div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>Agri<span>Pharm</span></div>
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="username" name="user"><br>
        <input type="password" placeholder="password" name="password"><br>
        <input type="button" value="Login" onclick="redirectToAnotherPage()">
    </div>
    <script type="text/javascript">
        function redirectToAnotherPage() {
        // Add code to redirect user to another page after login
        window.location.href = "index.html"; // Replace with the URL you want to redirect to
    }
    </script>
    </body>
</html>