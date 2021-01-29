<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/update.css') }}" />
    <title>Update Result</title>
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
    <div class="container-div">
        <div class="loginForms">
            <h1>Update CGPA</h1>
            <form method="post" action="../save_update/{{$allResult->id}}">
                @csrf
                @method('patch')
                <div class="input-form-semester">
                    <input type="text" name="semester" value="{{$allResult->semester}}">
                </div>
                <input type="hidden" name="id" value="{{$allResult->id}}">
                <div class="input-form">
                    <input type="number" name="credit1" placeholder="Credits" step="0.5" min="1" required>
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
                    <button class="btn" type="submit">Calculate & Update</button>
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

    </div>
</body>

</html>