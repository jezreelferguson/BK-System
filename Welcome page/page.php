<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Login Popup</title>
    <style>
       
    </style>
</head>
<body>
    <h1>Welcome to BK System</h1>
    <button onclick="showPopup()">Login</button>
    
    <div class="popup" id="loginPopup">
        <button onclick="alert('Client Login')">Login as Client</button>
        <button onclick="alert('Admin Login')">Login as Admin</button>
        <button onclick="closePopup()">x</button>
    </div>
    
    <script>
        function showPopup() {
            document.getElementById('loginPopup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('loginPopup').style.display = 'none';
        }
    </script>
</body>
</html>
  

