<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/welcome.css') }}" />
    <title>CalculateCGPA</title>
</head>   
<body>
    <nav class="header">
        <!-- <div class="headerLeft">
        this is headerLeft
        </div> -->

        <div class="headerMid">
            <ul class="sideBar">
                <li> <a href="start_home" class="homeTag">Home</a></li>
                <li> <a href="start_calculator">Calculator</a></li>
                <li> <a href="show_records">Result Record</a></li>
            </ul>
        </div>

        <!-- <div class="headerRight">
            This is right
        </div> -->
    </nav>
    <div id = "welcome">
        <h1>Welcome To CalculateCGPA!</h1>
    </div>
    <div>
        <p>Want to calculate your CGPA?</p>
    </div>
    <div>
        <button onclick="location.href='start_calculator';" type="button" class="btn btn-primary">Get Started</button>
    </div>
    
</body>
</html>