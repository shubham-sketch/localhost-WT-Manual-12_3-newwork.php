
<?php
include("config.php");
?>

<html>
    <head>
        <title>Registration Details in MySql Database </title>
    </head>
    <style>
        h2{
            text-align: center;
            color: blue;
        }
        body{
            border: 10px solid rgb(21, 114, 190);
            width: 30%;
            height: 70%;
            margin: auto;
            margin-top: 2%;
            padding: 20px;
            font-size: 150%;
            font-style:inherit;
        }
        input[type=text], input[type=date]{
            width: 50%;  
            padding: 10px;  
            margin: 1px 0 1px 0;  
            display: inline-block;  
            border: none;  
            background: #f1f1f1;  
        }  
        #submit{
            background-color: #2f7385;  
            color: white;  
            padding: 16px 20px;  
            margin: 8px 0;  
            border: none;  
            width: 100%;
        }

        label.lab {
            display: inline-block;
            width: 190px;
        }
    </style>
    <body>
        <h2>Registration Form</h2>
        <form action="#" method="POST">
            <label class="lab">UserName </label>
            <input type="text" name="uname"  placeholder="Enter Your UserName" ><br><br>

            <label class="lab">Address</label>
            <input type="text" name="address" placeholder="Enter Your Address" ><br><br>
            
            <label class="lab">Date Of Birth</label>
            <input type="date" name="dob"><br><br>
            
            <label class="lab">Age</label>
            <input type="text" name="number" placeholder="Enter Your Current Age"><br><br>

            <label class="lab">PanCard</label>
            <input type="text" name="pan" placeholder="Enter Your PanCard Number"><br><br>
           
            <label class="lab">Gender</label>
            <input type="radio" name="ab" value="Male" required=true>Male 
            <input type="radio" name="ab" value="female" required=true>Female 
            <input type="radio" name="ab" value="Other" required=true>Other
    
            <br><br>
            <input id="submit" type="submit" value="Sign Up" name="submit"><br><br>
        </form>
    </body>
</html>

<?php

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
	$number = $_POST['number'];
	$pan = $_POST['pan'];
	$gender = $_POST['ab'];
	
    if(empty($uname) || empty($address) || empty($dob) || empty($number) || empty($pan) || empty($gender)){
        echo '<span style="color:red"> All fields are required </span>';
    }
    else {
        $result = mysqli_query($mysqli,"insert into user values('$uname','$address','$dob','$number','$pan','$gender')");
        if($result)
        {
            echo '<span style="color:green">Registration Successfully</span>';

        }else{
            echo '<span style="color:red"> failed! </span>';
	    }
    }
}

?>

