@extends('layouts.main')
   
    @section('main-section')
        <div class="main-content">
            <div class="slogan">
                <h1>Admission Going On</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim illo voluptas nostrum asperiores aperiam est perspiciatis fugiat, minus, cum
                 ad autem praesentium reiciendis omnis porro consectetur deserunt earum molestiae distinctio.</p>
                <a href="http://" class="btn-admission">Admission Now</a>
            </div>
        </div>
        <div class="course">
            <h2>OUR MAIN COURSES</h2>
            <div class="card">
                <x-cards src="html.png" title="HTML" slogan="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aperiam autem similique expedita culpa molestias amet"/>
                <x-cards src="php.png" title="PHP" slogan="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aperiam autem similique expedita culpa molestias amet"/>
                <x-cards src="java.png" title="JAVA" slogan="Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aperiam autem similique expedita culpa molestias amet"/>
            </div>     
        </div>
        <div class="count">
            <div class="mycount">
                <h1>Student</h1>
                <h3 id="snumber">350</h3>
            </div>
            <div class="mycount">
                <h1>Course</h1>
                <h3 id="course">50</h3>
            </div>
            <div class="mycount">
                <h1>Stuffs</h1>
                <h3 id="stuff">35</h3>
            </div>
        </div>

        <script>
            var counts = document.querySelector(".count");
            var animated = false;
            var studentInterval, stuffsInterval, courseInterval;
        
            function startCounting() {
                var topelm = counts.offsetTop;
                var btmscrn = window.pageYOffset + window.innerHeight;
                var topscrn = window.pageYOffset;
        
                if (btmscrn > topelm && topscrn < topelm + counts.clientHeight) {
                    if (!animated) {
                        studentInterval = setInterval(studentCount, 10);
                        stuffsInterval = setInterval(stuffCount, 10);
                        courseInterval = setInterval(courseCount, 10);
                        animated = true;
                    }
                } else {
                    animated = false;
                    clearInterval(studentInterval);
                    clearInterval(stuffsInterval);
                    clearInterval(courseInterval);
                }
            }
        
            window.addEventListener("scroll", startCounting);
        
            let count1 = 1;
            function studentCount() {
                count1++;
                document.getElementById("snumber").innerText = count1;
                if (count1 >= 350) {
                    clearInterval(studentInterval);
                }
            }
        
            let count2 = 1;
            function stuffCount() {
                count2++;
                document.getElementById("stuff").innerText = count2;
                if (count2 >= 35) {
                    clearInterval(stuffsInterval);
                }
            }
        
            let count3 = 1;
            function courseCount() {
                count3++;
                document.getElementById("course").innerText = count3;
                if (count3 >= 50) {
                    clearInterval(courseInterval);
                }
            }
        </script>
        
    @endsection
