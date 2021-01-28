<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/update.css') }}" />
    <title>Document</title>
</head>   
<body>
    <header class="header">
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
    </header>
   <div class="loginForms">
       <h1>Update CGPA</h1>
       <form method="post" action="../save_update/{{$allResult->id}}">
            @csrf
            @method('patch')
           <div class="input-form-semester">
               <input type="text" name="semester" value ="{{$allResult->semester}}">
           </div>
           <input type="hidden" name="id" value="{{$allResult->id}}">
           <div class="input-form">
                <input type="number" id="totalAmt" name="credit1" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa1" placeholder="Subject GPA">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="credit2" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa2" placeholder="Subject GPA">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="credit3" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa3" placeholder="Subject GPA">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="credit4" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa4" placeholder="Subject GPA">
           </div>

           <div>
               <button class="btn" type = "submit">Calculate & Update</button>
           </div>

       </form>
   </div>
</body>
</html>