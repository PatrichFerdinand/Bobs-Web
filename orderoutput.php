<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts



    </title>
</head>
<body>
<h1 style="text-align: center;">Bob's Auto Parts</h1>
    <h2 style="text-align: center;" >  <?php
       
        echo "<p>Order Processed at  ";
        date_default_timezone_set('Asia/Manila');
        echo date('H:i, jS F Y');
        echo "</p>";
        
        
       ?></h2>

<?php

    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $find = $_POST['find'];
    $totalqty = 0;
    $totalqty = $tireqty +  $oilqty + $sparkqty;
    $totalamount = 0.00;

    define('tireprice', 100);
    define('oilprice', 10);
    define('sparkprice', 4);

  

    $totaalamount = $tireqty * tireprice 
                    + $oilqty * oilprice
                    + $sparkqty * sparkprice;

                    $taxrate = .10;
                    $totalamount = $totaalamount * (1 + $taxrate);

    $discount = $totalamount * .10;
    $dis = $totalamount - $discount;
                        
    $distance = $_POST['distance'];

    $shipping = $distance - 45;
               
             
                   ?>
    <h1 style="text-align: center; color: red; "><?php  if ($totalqty == 0)
    
                    echo 'You did not order anything on the previous page!!!<br />';?></h1>

    <form>
        <table style="border: solid 2px;  margin-left: 500px;">
            <tr style="background: #cccccc;">
                <td style="width: 150px; text-align: center;">Item</td>
                <td style="width: 150px; text-align: center;">Quantity</td>
                
            </tr>

            <tr>
                <td style="font-size: 50px; font-family: Impact, Charcoal, sans-serif;
f">Tires</td>
                <td  style="text-align: center;"><?php echo $_POST['tireqty'];?></td>
                
            </tr>
            
            <tr>
                <td style="font-size: 50px; font-family: Impact, Charcoal, sans-serif;
f">Oil</td>
                <td  style="text-align: center;"><?php echo $_POST['oilqty'];?>  </td>
                
       
            </tr>
                <tr>
                <td style="font-size: 50px; font-family: Impact, Charcoal, sans-serif;
f">Sparkplug</td>
                <td  style="text-align: center;"><?php echo  $_POST['sparkqty'];?></td>
    
            </tr>

            <tr>
                <td style="font-size: 20px; ">Total Items</td> 
                <td  style="text-align: center;"><?php echo $totalqty;?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">subtotal Amount</td> 
                <td  style="text-align: center;"><b>$</b><?php echo number_format ($totaalamount,2);?></td>
           
            </tr>
            <tr>
                <td style="font-size: 20px;">Total Included Tax</td> 
                <td  style="text-align: center;"><b>$</b><?php echo number_format ($totalamount,2);?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Discount 10%</td> 
                <td  style="text-align: center;"><b>$</b><?php echo number_format ($discount,2);?></td>
            </tr> 
            <tr>
                <td style="font-size: 20px;">Total Amount</td> 
                <td  style="text-align: center;"><b>$</b><?php echo number_format ($dis,2);?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Distance</td> 
                <td  style="text-align: center;"><b>Km</b><?php echo  ($distance);?></td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Shipping Fee</td> 
                <td  style="text-align: center;"><b>$</b><?php echo number_format ($shipping,2);?></td>
            </tr>
        </table>
<h4 style="text-align: center;">
<?php switch($find) {

    
case "a" :
echo "<p>Regular customer.</p>";
break;
case "b" :
echo "<p>Customer referred by TV advert.</p>";
break;
case "c" :
echo "<p>Customer referred by phone directory.</p>";
break;
case "d" :
echo "<p>Customer referred by word of mouth.</p>";
break;
default :
echo "<p>We do not know how this customer found us.</p>";
break;
}?></h4>
    </form>


</body>
</html>