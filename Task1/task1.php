<head>

<body>
<h1>Registration Form</h1> <hr>
<form action="task1.php" method="get">

    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"><br> <br>
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br> <br>
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"><br> <br>
    <label for="designation">Designation:</label>
    <input type="radio" id="junior programmer" name="designation" value="Junior Programmer">
    <label for="junior programmer">Junior Programmer</label>
    <input type="radio" id="senior programmer" name="designation" value="Senior Programmer">
    <label for="senior programmer">Senior Programmer</label>
    <input type="radio" id="project lead" name="designation" value="Project Lead">
    <label for="project lead">Project Lead</label> <br> <br>
    <label for="language">Preferred Language:</label>
    <input type="checkbox" id="language1" name="language1" value="Java" >
    <label for="language1">Java</label>
    <input type="checkbox" id="language2" name="language2" value="PHP" >
    <label for="language2">PHP</label>
    <input type="checkbox" id="language3" name="language3" value="C++" >
    <label for="language3">C++</label> <br> <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>

    <label for="file">Please Choose a file</label>
    <input type="file"> <br> <br>


    <button type="submit" value="Submit">Submit</button>
    <button type="reset"  value="Reset">Reset</button>









</form>

</body>

</head>