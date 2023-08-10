<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>View Students</title>
</head>
<body>
    <table>
        <tr>
          <th>Name</th>
          <th>Email Address</th>
          <th>Class</th>
          <th>Options</th>
        </tr>
        <tr>
            @foreach ($students as $student)
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->class}}</td>
            <td>
               <a href="{{URL('/update/')}}/{{$student->id}}"><button class="update">Update</button></a>
               <a href="{{URL('/delete/')}}/{{$student->id}}"><button class="delete">Delete</button></a>
            </td>
            
        

        </tr>
        @endforeach
      </table>
      <a href="{{URL('/registration')}}">Insert Student</a>
</body>
</html>