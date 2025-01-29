<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            padding: 30px;
            text-align: center;
            width: 40%;
            background-color: #D1EBF2;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }
        button {
            background-color: #338699;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background-color: #226170;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <h2>Insert Data</h2>
            Name: <input type="text" name="student-name" > <br>
            Roll: <input type="number" name="student-roll" > <br>
            Email: <input type="email" name="student-email"> <br>
            <button type="submit" name="submit-data">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
    include "connection.php";
    if(isset($_POST["submit-data"])){
        $name=$_POST["student-name"];
        $roll=$_POST["student-roll"];
        $email=$_POST["student-email"];
        $insert_data="INSERT INTO `data`( `name`, `roll`, `email`) VALUES ('$name','$roll','$email')";

        $exe_insert_data= mysqli_query($con,$insert_data);

        if($exe_insert_data){
            echo"<script>
                alert('Data successfully submitted!')
            </script>";
        }else{
            echo"<script>
                alert('Unable to submit data. Please try again!')
            </script>";
        }
    }
?>
