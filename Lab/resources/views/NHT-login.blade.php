<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="log">
            <h1>Login</h1>
            <form action="login" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password"required>
                <input type="submit" value="Login">
            </form>
    </div>
    <div class="link"></div>
        <a href="NHT-register">Register</a>
        <a href="NHT-forgot">Forgot Password</a>
    </div>
</body>
</html>