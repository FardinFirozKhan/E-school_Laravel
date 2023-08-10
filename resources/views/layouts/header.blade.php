<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-School</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
</head>
  <body>
   <div>
    <nav class="navbar">
 
        <div class="logo">
            <a href="{{URL('/')}}" class="navbarlink">
            <img class="logo-img" src="{{URL('images/logo.jpg')}}" alt="">
        </a> 
            <label for="">E-School</label>
        </div>
 
        <a class="toggle-btn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navlink">
                <ul>
                    <li><a href="{{URL('/')}}">Home</a></li>
                    <li><a href="{{URL('/about')}}">About</a></li>
                    <li><a href="{{URL('/course')}}">Courses</a></li>
                </ul>
        </div>
    </nav>
   </div>
    <script>
        const toggleBtn = document.getElementsByClassName('toggle-btn')[0];
        const navlink = document.getElementsByClassName('navlink')[0];
        toggleBtn.addEventListener('click', () => {
            navlink.classList.toggle('actives');
        });
    </script>
    
  </body>