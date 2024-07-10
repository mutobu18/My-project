<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Maria House Ltd! Having you is such a blessing.</title>
    <link rel="stylesheet" href="Css files/sing.css">
    
</head>
<body>
    <div class="fixed-content">
        <fieldset>
            <legend>Maria House </legend>
            <p>We sell good quality products from all over the world.</p>
        </fieldset>
    </div>
   
    
    <fieldset>
        <form id="signInForm" action="index.php" method="post" onsubmit="return validateForm()">
            <legend>Welcom to Maria House Ltd!</legend>
            <legennd>Sing in</legennd><br><br>
            
            <label for="name">User name</label><br>
            <input type="text" id="name" name="user-name" placeholder="user-name"><br>

            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="email"><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="password"><br>

            <button type="submit">Save details</button>
            <a href="register.html">Create an Account</a>
        </form>
    </fieldset>

    <script>
        function validateForm() {
            // Retrieve input values
            var userName = document.getElementById('name').value.trim();
            var userEmail = document.getElementById('email').value.trim();
            var userPassword = document.getElementById('password').value.trim();

            // Simple validation example
            if (userName === '' || userEmail === '' || userPassword === '') {
                alert('Please fill in all fields.');
                return false; // Prevent form submission
            }

            //Redirect to the Home page 

            return true;

           
        }
    </script>


</body>
</html>
