<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
</head>
<body>
   <div class="registration">
    <form action="" method="post">
        @csrf
        <input type="text" name="name" value="{{$students->name}}">
        <br>
        <input type="email" name="email" value="{{$students->email}}">
        <br>
        <input type="number" name="class"  value="{{$students->class}}">
        <br>
        <button type="submit">Add Student</button>
    </form>
   </div>
</body>
</html>