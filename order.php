<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" conetnt="width=device-width, initial-scale=1">
    <title>Reciept of your order</title> 
    </head>
    <body>
        <?php
        //checking if user has clicked the submit button or not
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST["txtname"];
            $good=$_POST["drpmojito"];
            $qty=(int)$_POST["txtqty"];

            //prices of the mojito's
            $prices=array("Lime"=>200.00,"Watermelon"=>200.00,"Apple"=>250.00,"Passion Fruit"=>230.00);

            //calculate the total for the order
            $grosstot=$prices[$good]*$qty;
            
            //generating a random order ID
            $random_id="Order#".rand(000,10000);

            //creating the db connection
            $conn= new mysqli("localhost","id20938036_rootdb","Himesh12345@","id20938036_mojito_db");
            
           
            $sql="INSERT INTO Mojito_db VALUES('$random_id','$name','$good','$grosstot')";

            $conn->query($sql);

            $conn->close();
        }
        
        ?>
        <h2 alin="left" style="color:blue;"> Thank you for your order, <?php echo $name; ?> </h2>
        <table border="1" width="300" height="300">
            <tr>
                <td colspan="2">
                     <p><b><u>Reciept for your order </u></b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Order ID</p>
                </td>
                <td>
                    <?php echo $random_id; ?> 
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
                    <?php echo $qty; ?>
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
                    <p>Rs.<?php echo $prices[$good] * $qty;?></p>
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
                    <p> Rs. <?php echo $prices[$good]*$qty; ?></p>
                 </td>       
            </tr>
        </table>
        <h3> Have a nice day Sir/Madam !!</h3>

    
    <div class="footer">
        <p style="background-color: gray; color: white; text-align: center;"> <a href="https://www.instagram.com/larue_dev/" target="_blank">© 2023 LaRue Dev.</a> All Rights Reserved.
        <br>
        Made with love ❤️</p>
    </div>



    










 </body>
</html>