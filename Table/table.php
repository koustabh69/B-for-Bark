<!DOCTYPE html>
<html lang="en">

<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
    
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Health card</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fixed.css">
<!--===============================================================================================-->	
<!--	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    
    
    <style>
    
        .{
            margin:0px;
            padding: 0px;
            font-family: sans-serif;
        }
        #sidebar{
            position:fixed;
            width:200px;
            height:100%;
            background: #151719;
        }
     #sidebar ul li
        {
            color:rgba(230,230,230,0.9);
            list-style:none;
            padding: 15px 10px;
            border-bottom: 1px solid 
        }
    
    
    
    
    </style>
</head>
    
    <body data-spy="scroll" data-target="#navbarResponsive">
    <!--    home section-->
    <div id="home">
        <!--        navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">


            <a class="navbar-brand" href="index.php">Welcome to B for Bark</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <!-- <li>
            <li class="nav-item">
              <a class= "nav-link" href="#">Pets</a>
            </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="healthcard.php">Health card</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="petregister.php">Pet-Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">History</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
        
        
        <div id="sidebar">
            <div class ="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
            <li>PETS</li>
            <li>PET DETAILS</li>
            <li>OTHER DETAILS</li>


            
            
            
            </ul>
    </div>
        
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">
                                   <center><h5>Pet  Healthcard</h5></center>
								</th>
                                
                            </tr>
                            
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">NAME</td>
								<td class="column100 column2" data-column="column2"></td>
                                

							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">BREED</td>
								<td class="column100 column2" data-column="column2"></td>

								
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">WEIGHT</td>
								<td class="column100 column2" data-column="column2"></td>

							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">AGE</td>
								<td class="column100 column2" data-column="column2"></td>
					</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">BLOOD GROUP</td>
								<td class="column100 column2" data-column="column2"></td>
					</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">ALLERGIES</td>
								<td class="column100 column2" data-column="column2">
                    </td>

							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">MEDICATION</td>
								<td class="column100 column2" data-column="column2"> 
                  </td>

							</tr>

                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>