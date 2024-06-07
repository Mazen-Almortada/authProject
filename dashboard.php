<html> 
    <head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body  >

<style>

        .button-container {
            text-align: center;
        }
        .custom-button {
            background-color: #79f7f0;
            color: black;
            border: none;
            padding: 20px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 24px;
            border-radius: 10px;
            cursor: pointer;
            margin: 10px;
            transition: background-color 0.3s, color 0.3s;
        }
        .custom-button:hover {
            background-color: #5ad3d1;
            color: black;
        }
    </style>
</head>
<body>



<br>
<br>
<br>



<center>
<h1> <b>
   Home Page
</b> </h1>
</center>
<hr width="50%" size="3" color="black" id="smooth">
<br>
<center>

	
       <main>

            <?php
				session_start();
				include 'conn.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM users where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
         
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <div class="button-container">
    <a class="custom-button" href="con.php">Car Menu</a>
    <a class="custom-button" href="RegisterCar.html">Car Registration</a>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

       
		<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["Email"] ?> </p>
        Want to Leave the Page? <br> <br>
        
        <a href="logout.php">  <button type="submit" > Logout</button></a>
        </main>
        </center>
</body>

</html>