<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Cart</title>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/cart.css">
</head>
<body>

<div class="container" style="width: 100%;margin: 0;padding: 0;">

 
  <img src="../img/cart.jpg" alt="" class="banner">
  <div class="main" style="margin:0px auto;width:999px">
    <h1 class="title">Cart</h1>
    
        <table class="table" style="width:100%">
           
                <tr>
                
                <td>
                    Name
                </td>
                <td>
                    Price
                </td>
                <td>
                    Quantity
                </td>
                <td>
                    Total
                </td>
                <td>
                    Operation
                </td>
                </tr>
            
               <tr class="productItem">
                   
                   <td>Play Has No Limits™</td>
                   <td><span>$</span><span class="price">399</span></td>
                   <td><button class="button reduce">-</button><span class="quantity">1</span><button class="button plus">+</button></td>
                   <td><span>$</span><span class="total">399</span></td>
                   <td><a href=""><button class="button">Delete</button></a></td>
                   
               </tr>
               <tr class="productItem">
                   
                   <td>Marvel's Spider-Man: Miles Morales</td>
                   <td><span>$</span><span class="price">39</span></td>
                   <td><button class="button reduce">-</button><span class="quantity">1</span><button class="button plus">+</button></td>
                   <td><span>$</span><span class="total">39</span></td>
                   <td><a href=""><button class="button">Delete</button></a></td>
                   
               </tr>
               <tr class="productItem">
                   
                   <td>Demon's Souls</td>
                   <td><span>$</span><span class="price">39</span></td>
                   <td><button class="button reduce">-</button><span class="quantity">1</span><button class="button plus">+</button></td>
                   <td><span>$</span><span class="total">39</span></td>
                   <td><a href=""><button class="button">Delete</button></a></td>
                   
               </tr>
        </table>
        <div>Total:<span>$</span><span class="allTotal">477</span></div>
        
        
            <div class="payButton"><a href="#"><button class="button">Pay</button></a></div>
        
   
  <?php
    require_once "./footer.php";
  ?>
  