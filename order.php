<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" conetnt="width=device-width, initial-scale=1">
    <title>Reciept of your order</title> 
    <link rel="stylesheet" type="text/css" href="receipt.css">
    </head>
    <body>
        
        <?php
        //checking if user has clicked the submit button or not
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST["txtname"];
            $good=$_POST["drpmojito"];
            $qty=(int)$_POST["txtqty"];

            //prices of the mojito's
            $prices=array("Lime"=>150.00,"Watermelon"=>150.00,"Apple"=>150.00,"Passion Fruit"=>150.00);

            //calculate the total for the order
            $grosstot=$prices[$good]*$qty;
            
            //generating a random order ID
            $random_id="Order#".rand(000,10000);

            //creating the db connection
            $conn= new mysqli("localhost","id20938036_rootdb","Himesh12345@","id20938036_mojito_db");
            
           
            $sql="INSERT INTO Mojito VALUES('$random_id','$name','$good','$grosstot')";

            $conn->query($sql);

            $conn->close();
        }
        
        ?>
        <h2 alin="left"> Thank you for your order, <?php echo $name; ?> </h2>
        <table border="0" width="700" height="700">
            <tr>
                <td colspan="2">
                     <p style="font-size:28px"><b><u>Reciept for your order </u></b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Order ID</p>
                </td>
                <td>
                    <p><?php echo $random_id; ?> </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p> Ordered Mojito </p>
                </td>
                <td>
                    <p><?php echo $good ?></p>
                 </td>
            </tr>
            <tr>
                <td>
                    <p>Quantity</p>
                </td>
                <td>
                    <p><?php echo $qty; ?></p>
                </td>
            <tr>
                <td>
                    <p> Unit price</p>
                </td>
                <td>
                    <p>Rs.<?php echo $prices[$good];?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p> Gross total</p>
                </td>
                <td>
                    <p>Rs.<?php echo $grosstot;?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Discounts</p>
                </td>
                <td>
                    <p> 0%</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p> Net total </p>
                </td>
                <td>
                    <p><u> Rs. <?php echo $grosstot; ?></u></p>
                 </td>       
            </tr>
        </table>
        <h3 class="myclass4"> Have a nice day Sir/Madam !!</h3>
        <br><br>

    
    <div class="footer">
    <div style="background: linear-gradient(to right, #1e3c72 0%, #1e3c72 1%, #2a5298 100%); color: white; text-align: center; font-size: 16px;font-family: sans-serif"> <a href="https://www.instagram.com/larue_dev/" target="_blank">© 2023 LaRue Dev.</a>All Rights Reserved.
        <br>
        Made with love ❤️
    </div>
    </div>



    










 </body>
</html>