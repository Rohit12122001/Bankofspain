<?php
                            include 'config.php';
                            if(isset($_POST['submit']))
                            {	 
	                         $first_name = $_POST['f_name'];
	                         $last_name = $_POST['l_name'];
                             $email = $_POST['email'];
                             $message = $_POST['msg'];
	                         $sql = "INSERT INTO contact('f_name','l_name','email','msg') VALUES ('$first_name','$last_name','$email','$message')";
                             $query=mysqli_query($conn,$sql);
                             if ($query)
                              {
	                        	echo "<script> alert('Submitted Successfully!');
                                     window.location='contact.php';
                                    </script>";
                               }
                             else {
	                            	echo "Error: " . $sql . "
                                    " . mysqli_error($conn);
	                            }
	                          
                            }
                        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bank of Spain</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Homestyle.css">
        <link rel="stylesheet" type="text/css" href="form.css">
    </head>
    <body>
        <div class="top">
            <div id="logo">
                <img src="bank.jpeg" alt="Bank logo" height="90px" width="110px" style="float: left; padding-left: 10px;">
            </div>
            <div id="logo">
                <img src="bank.jpeg" alt="Bank logo" height="90px" width="110px" style="float: right; padding-right: 10px;">
            </div>
            <div id="heading"  style="text-align: center;">
                <header style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 71px; float: unset; ">
                   Bank of Spain
                </header>
                <hr>   
            </div>
        </div>

        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="customer's.php">Customers</a>
            <a href="transfer.php">Transfer Money</a>
            <a href="history.php">History</a>
            <a href="contact.php">Contact us</a>
        </div>
        <div class="container" style="background-color: #BDC3C7;">
             <h3>Contact Form</h3>
                <form action="#" name="contact_form">
                    <label for="first_name">First Name</label>
                    <input name="f_name" type="text" required placeholder="John"/>
                    <br>
                    <label for="last_name">Last Name</label>
                    <input name="l_name" type="text" required placeholder="Doe"/>
                    <br>
                    <label for="email">Email</label>
                    <input name="email" type="email" required placeholder="you@domain.com"/>
                    <br>
                    <label for="message">Message</label><br>
                    <textarea name="msg" cols="30" rows="10" placeholder="Enter your message here ..." required> </textarea>
                    <div class="center">
                        <input type="submit" name="submit" value="Submit">
                       
                    </div>
                </form>	
        </div>
        <br>
        <footer class="text-center mt-5 py-2" >
            <br>
            <p style="padding-left: 20px;"><b>ADDRESS:</b> Coloba,Mumbai-400001</p>
            <p style="padding-left: 20px;"><b>PHONE:</b> 7350023981</p>
            <p style="padding-left: 20px;"><b>EMAIL:</b>rgehlot141@gmail.com</p>
            <p style="text-align: center;">&copy 2021. Made by <b>ROHIT GEHLOT</b> <br> </p>
        </footer>    
    </body>
</html>