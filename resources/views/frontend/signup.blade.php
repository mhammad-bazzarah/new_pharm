<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>

<div class="body"></div>
<div class="grad"></div>
<div class="header">
  <div>Agri<span>Pharm</span></div>
</div>
<br>
<div class="signup">
    <input type="text" placeholder="username" name="user"><br>
    <input type="password" placeholder="password" name="password"><br>
    <input type="email" placeholder="email" name="email"><br>
    <input type="button" value="signup" onclick="redirectToAnotherPage()">
    <br><br>
    
</div>

<script>
    function loginWithGoogle() {
        // Add code to handle Google login
        // Redirect user to Google login page
    }

    function loginWithFacebook() {
        // Add code to handle Facebook login
        // Redirect user to Facebook login page
    }
      function redirectToAnotherPage() {
        // Add code to redirect user to another page after login
        window.location.href = "index.html"; // Replace with the URL you want to redirect to
    }
</script>

</body>
</html>
