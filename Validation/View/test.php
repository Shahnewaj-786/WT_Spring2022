<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registration Form</h1> <hr> 
   
        <form action="../Control/results.php" method="POST" enctype="multipart/form-data">
        <table cellspacing="3" cellpadding="3">
    
    <tr>
        <td><label for="fname">First Name:</label></td>
        <td><input type="text" id="fname" name="fname"></td>
    </tr>

    <tr>
        <td><label for="lname">Last Name:</label></td>
        <td><input type="text" id="lname" name="lname"></td>
    </tr>

    <tr>
        <td><label for="age">Age:</label></td>
        <td><input type="text" id="age" name="age"></td>
    </tr>

    <tr>
       <td><label for="designation">Designation:</label></td>
       <td>
            <input type="radio" id="junior programmer" name="designation" value="Junior Programmer">
            <label for="junior programmer">Junior Programmer</label>
            <input type="radio" id="senior programmer" name="designation" value="Senior Programmer">
            <label for="senior programmer">Senior Programmer</label>
            <input type="radio" id="project lead" name="designation" value="Project Lead">
            <label for="project lead">Project Lead</label> 
       </td>

    </tr>
    <tr>
        <td><label for="language">Preferred Language:</label></td>
        <td>
        <input type="checkbox" id="language" name="language[]" value="Java" >
        <label for="language">Java</label>
        <input type="checkbox" id="language" name="language[]" value="PHP" >
        <label for="language">PHP</label>
        <input type="checkbox" id="language" name="language[]" value="C++" >
        <label for="language">C++</label>
        </td>
    </tr>

    <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="text" id="email" name="email"></td>
    </tr>

    <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" id="password" name="password"></td>
    </tr>

    <tr>
        <td><label for="file">Insert Your CV</label></td>
        <td><input type="file"></td>
    </tr>

    <tr>
        <td><button type="submit" value="Submit">Submit</button></td>
        <td><button type="reset"  value="Reset">Reset</button></td>
    </tr>
    
</table>
        </form>
   
</body>
</html>