<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Registration</title>
</head>
<body>
   <div class="registration">
    <h1>Add Student</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Student Name">
        <br>
        <input type="email" name="email" placeholder="Enter Email Address">
        <br>
        <input type="number" name="class" placeholder="Enter Class">
        <br>
        <button type="submit">Add Student</button>
    </form>
   </div>
</body>
</html>