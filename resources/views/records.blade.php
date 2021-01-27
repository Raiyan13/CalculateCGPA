<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/records.css') }}" />
    <title>CalculateCGPA</title>
</head>   
<body>
    <nav class="header">
        <div class="headerMid">
            <ul class="sideBar">
                <li> <a href="start_home">Home</a></li>
                <li> <a href="start_calculator">Calculator</a></li>
                <li> <a href="show_records" class="homeTag">Result Record</a></li>
            </ul>
        </div>
    </nav>
    
    @if(Session::has('saved'))
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Saved Successfully!</strong> Result saved successfully to records.
            </div>
    @endif
    <div id = "table-div">
        <table id = "data-table" class="outlined">
        <thead>
            <tr>
                <th>Entry No.</th>
                <th>Semester</th>
                <th>CGPA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2nd</td>
                <td>3.50</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2nd</td>
                <td>3.50</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2nd</td>
                <td>3.50</td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>