<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/result.css') }}" />
    <title>CalculateCGPA</title>
</head>   
<body>
    <nav class="header">
        <!-- <div class="headerLeft">
        this is headerLeft
        </div> -->

        <div class="headerMid">
            <ul class="sideBar">
                <li> <a href="start_home">Home</a></li>
                <li> <a href="start_calculator">Calculator</a></li>
                <li> <a href="show_records">Result Record</a></li>
            </ul>
        </div>

        <!-- <div class="headerRight">
            This is right
        </div> -->
    </nav>
    <div id = "result">
        <h1>Your CGPA in {{$semester}} semester is {{$result}}</h1>
    </div>
    <div>
        <h3>Want to save result?</h3>
    </div>
    <div>
        $data = array($semester,$result);
        <button onclick="location.href='start_save';" type="button" class="btn btn-primary" name = "result" value = $data>Save</button>
    </div>
    
</body>
</html>