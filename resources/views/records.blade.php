<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/records.css') }}" />
    <title>Your Records</title>
</head>

<body>
    <nav class="header">
        <div class="headerMid">
            <ul class="sideBar">
                <li class="nav-button"> <a href="start_home">Home</a></li>
                <li class="nav-button"> <a href="start_calculator">Calculator</a></li>
                <li class="nav-button"> <a href="show_records" class="homeTag">Result Record</a></li>
                <li class="nav-button"> <a href="show_about">About</a></li>
            </ul>
        </div>
        @if(Session::has('saved'))
        @php
        Session::forget('saved');
        @endphp
        <div class="saved">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Saved Successfully!</strong> Result Saved Successfully To Records.
        </div>
        @endif
        @if(Session::has('deleted'))
        <div class="deleted">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Deleted Successfully!</strong> Selected Result Deleted Successfully From Records.
        </div>
        @endif
        @if(Session::has('updated'))
        <div class="updated">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Updated Successfully!</strong> Edited Result Updated Successfully In Records.
        </div>
        @endif
    </nav>

    <div class="container-div">
        <div id="table-div">
            <table id="data-table" class="outlined">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Semester</th>
                        <th>Calculated CGPA</th>
                        <th>Last Updated</th>
                        <th>Creation Date</th>
                        <th>Action Update</th>
                        <th>Action Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1
                    @endphp
                    @foreach($allResult as $resultNow)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$resultNow->semester}}</td>
                        <td>{{$resultNow->cgpa}}</td>
                        <td id="date">{{$resultNow->updated_at}}</td>
                        <td id="date">{{$resultNow->created_at}}</td>
                        <td><a class="update-button" href="update_result/{{$resultNow->id}}">Update</a></td>
                        <td><a class="del-button" href="delete_result/{{$resultNow->id}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>