<head>

<body>
<h1>Registration Form</h1> <hr>
<form action="task1.php" method="get">

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
         <input type="checkbox" id="language1" name="language1" value="Java" >
         <label for="language1">Java</label>
         <input type="checkbox" id="language2" name="language2" value="PHP" >
         <label for="language2">PHP</label>
         <input type="checkbox" id="language3" name="language3" value="C++" >
         <label for="language3">C++</label>
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
         <td><label for="file">Please Choose a file</label></td>
         <td><input type="file"></td>
     </tr>

     <tr>
         <td><button type="submit" value="Submit">Submit</button></td>
         <td><button type="reset"  value="Reset">Reset</button></td>
     </tr>
     
 </table>

</form>

</body>

</head>