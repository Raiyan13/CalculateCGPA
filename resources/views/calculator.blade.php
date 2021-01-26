<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/calculator.css') }}" />
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
                <li> <a href="start_calculator" class="homeTag">Calculator</a></li>
                <li> <a href="show_records">Result Record</a></li>
            </ul>
        </div>

        <!-- <div class="headerRight">
            This is right
        </div> -->
    </header>
   <div class="loginForms">
       <h1>Calculate CGPA</h1>
       <form method="post" action="submit_now">
            @csrf
           <div class="input-form-semester">
               <input type="text" name="semester" placeholder="Current Semester">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="creadit1" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa1" placeholder="Subject GPA">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="creadit2" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa2" placeholder="Subject GPA">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="creadit3" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa3" placeholder="Subject GPA">
           </div>

           <div class="input-form">
                <input type="number" id="totalAmt" name="creadit4" placeholder="Credits">
                <input type="number" id="totalAmt" name="gpa4" placeholder="Subject GPA">
           </div>

           <div>
               <button class="btn" type = "submit">Calculate</button>
           </div>

       </form>
   </div>
</body>
</html>