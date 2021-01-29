<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/calculator.css') }}" />
    <title>CGPA Calculator</title>
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

    <div class="container-div">
        <div class="all-input-form">
            <h1>Calculate CGPA</h1>
            <form method="post" action="show_result">
                @csrf
                <div class="input-form-semester">
                    <input type="text" name="semester" placeholder="Current Semester" required>
                    <!-- <select name="courses" id="combo-box">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select> -->
                </div>

                <!--
           $courseNumber;
                @if(isset( $_GET['courses']))  
                
           @for($i=1; $i<= $_GET['courses']; $i++)
                {
                    <div class="input-form">
                    <input type="number" name="credit1" placeholder="Credits" step="0.5" min="1">
                    <input type="number" name="gpa1" placeholder="Subject GPA" step="0.25" min="0" max="4">
                    </div>
                }
            @endfor
            @endif -->
                <div class="input-form">
                    <input type="number" name="credit1" placeholder="Credits" step="0.5" min="1" required>
                    <!-- <input type="number" name="gpa1" placeholder="Grade Point" step="0.25" min="0" max="4" required> -->
                    <select name="gpa1" id="combo-box" required>
                        <option value="4.00">A+</option>
                        <option value="3.75">A</option>
                        <option value="3.50">A-</option>
                        <option value="3.25">B+</option>
                        <option value="3.00">B</option>
                        <option value="2.75">B-</option>
                        <option value="2.50">C+</option>
                        <option value="2.25">C</option>
                        <option value="2.00">D</option>
                        <option value="0.00">F</option>
                    </select>
                </div>

                <div class="input-form">
                    <input type="number" name="credit2" placeholder="Credits" step="0.5" min="1" required>
                    <!-- <input type="number" name="gpa2" placeholder="Grade Point" step="0.25" min="0" max="4" required> -->
                    <select name="gpa2" id="combo-box" required>
                        <option value="4.00">A+</option>
                        <option value="3.75">A</option>
                        <option value="3.50">A-</option>
                        <option value="3.25">B+</option>
                        <option value="3.00">B</option>
                        <option value="2.75">B-</option>
                        <option value="2.50">C+</option>
                        <option value="2.25">C</option>
                        <option value="2.00">D</option>
                        <option value="0.00">F</option>
                    </select>
                </div>

                <div class="input-form">
                    <input type="number" name="credit3" placeholder="Credits" step="0.5" min="1" required>
                    <!-- <input type="number" name="gpa3" placeholder="Grade Point" step="0.25" min="0" max="4" required> -->
                    <select name="gpa3" id="combo-box" required>
                        <option value="4.00">A+</option>
                        <option value="3.75">A</option>
                        <option value="3.50">A-</option>
                        <option value="3.25">B+</option>
                        <option value="3.00">B</option>
                        <option value="2.75">B-</option>
                        <option value="2.50">C+</option>
                        <option value="2.25">C</option>
                        <option value="2.00">D</option>
                        <option value="0.00">F</option>
                    </select>
                </div>

                <div class="input-form">
                    <input type="number" name="credit4" placeholder="Credits" step="0.5" min="1" required>
                    <!-- <input type="number" name="gpa4" placeholder="Grade Point" step="0.25" min="0" max="4" required> -->
                    <select name="gpa4" id="combo-box" required>
                        <option value="4.00">A+</option>
                        <option value="3.75">A</option>
                        <option value="3.50">A-</option>
                        <option value="3.25">B+</option>
                        <option value="3.00">B</option>
                        <option value="2.75">B-</option>
                        <option value="2.50">C+</option>
                        <option value="2.25">C</option>
                        <option value="2.00">D</option>
                        <option value="0.00">F</option>
                    </select>
                </div>

                <div>
                    <button class="btn" type="submit">Calculate</button>
                </div>

            </form>
        </div>
        <div id="table-div">
            <table id="data-table" class="outlined">
                <thead>
                    <tr>
                        <th>Class interval</th>
                        <th>Letter grade</th>
                        <th>Grade point</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>80-100</th>
                        <th>A+</th>
                        <th>4.00</th>
                    </tr>
                    <tr>
                        <th>75-79</th>
                        <th>A</th>
                        <th>3.75</th>
                    </tr>
                    <tr>
                        <th>70-74</th>
                        <th>A-</th>
                        <th>3.50</th>
                    </tr>
                    <tr>
                        <th>65-69</th>
                        <th>B+</th>
                        <th>3.25</th>
                    </tr>
                    <tr>
                        <th>60-64</th>
                        <th>B</th>
                        <th>3.00</th>
                    </tr>
                    <tr>
                        <th>55-59</th>
                        <th>B-</th>
                        <th>2.75</th>
                    </tr>
                    <tr>
                        <th>50-54</th>
                        <th>C+</th>
                        <th>2.50</th>
                    </tr>
                    <tr>
                        <th>45-49</th>
                        <th>C</th>
                        <th>2.25</th>
                    </tr>
                    <tr>
                        <th>40-44</th>
                        <th>D</th>
                        <th>2.00</th>
                    </tr>
                    <tr>
                        <th>0-39</th>
                        <th>F</th>
                        <th>0.00</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>