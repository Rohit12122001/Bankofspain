<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customer's Details</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="Homestyle.css">
        
    </head>

    <body>

         <?php
             include 'config.php';
             $sql = "SELECT * FROM user";
             $result = mysqli_query($conn,$sql);
         ?> 

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
            <h2 class="text-center pt-4" style="color : black; text-align: center;">Customer's Details</h2>
            <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                       <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                           <thead style="color : black;">
                                <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($rows=mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <td class="py-3 text-center"><?php echo $rows['id'] ?></td>
                                        <td class="py-3 text-left"><?php echo $rows['name']?></td>
                                        <td class="py-3 text-left"><?php echo $rows['email']?></td>
                                        <td class="py-3 text-center"><?php echo $rows['balance']?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div> 
        </div>
        <br>
        <footer class="text-center mt-5 py-2" >
            <br>
            <p style="padding-left: 20px;"><b>ADDRESS:</b> Colaba,Mumbai-400001</p>
            <p style="padding-left: 20px;"><b>PHONE:</b> 7350023981</p>
            <p style="padding-left: 20px;"><b>EMAIL:</b>rgehlot141@gmail.com</p>
            <p style="text-align: center;">&copy 2021. Made by <b>ROHIT GEHLOT</b> <br> </p>
        </footer>
    </body>
</html>