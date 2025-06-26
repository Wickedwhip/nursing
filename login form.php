<!DOCTYPE html>
<html>
<head>
    <title>LOGIN IN</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 2.5em;
        }
        section {
            justify-content: center;
            background-color: white;
            padding: 32px;
            border-radius: 16px;
            width: 400px;
            box-shadow: 0 0 16px rgba(1, 247, 255, 0.5);
        }
        label, input, button {
            font-size: 1.2em;
        }
        button {
            padding: 10px 24px;
        }
        .login-title {
            color: #fff;
            text-shadow: 0 0 10px #00fff7, 0 0 20px #00fff7, 0 0 40px #00fff7;
        }
        /* Increase the size of the textbox and its text */
        input[type="text"] {
        width: 300px;      /* Set desired width */
        height: 40px;      /* Set desired height */
        font-size: 18px;   /* Set font size for text inside */
        padding: 8px;      /* Optional: add padding for better appearance */
        }
    </style>
</head>
<body>
    <h1 class="login-title">Login</h1>
    <section>
    <form>
        <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
        <label for="admin">Admin:</label>
            <input type="radio" id="admin" name="role" value="admin"><br><br>
        <label for="nurse">Nurse:</label>
            <input type="radio" id="nurse" name="role" value="nurse"><br><br>
        <label for="socialworker">Social Worker:</label>
            <input type="radio" id="socialworker" name="role" value="socialworker"><br><br>
        <button type="button" style="background-color: rgb(1, 183, 255); color: rgb(5, 5, 5);" onclick="
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            if (username && password) {
                alert('Login successful');
            } else {
                alert('Fill in the credentials');
            }
        ">Login</button>    
    </form>
    </section>
   
</body>
</html>
