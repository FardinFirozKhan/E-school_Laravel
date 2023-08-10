<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Log In</title>
</head>
<body>
    <form action="" method="POST">
       <div class="login">
        @csrf
        <h1>Login Here</h1>
        <input type="text" name="name"><br>
        <input type="password" name="password"><br>
        <button type="submit">Log in</button>
       </div>
    </form>
</body>
</html>