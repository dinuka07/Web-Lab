<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "university";
		
		
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		 
	
		$name = $_POST['username'];
		$password =$_POST['password'];
		$id =$_POST['id'];
		$email =$_POST['email'];
		
		
		
		
		$sql = "INSERT INTO student (id,name,password,email) VALUES ('$id','$name', '$password','$email')";

			mysqli_query($conn,$sql);


            echo "
            <table>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
            
            ";

		
	   
	?> 

