<style>
    table {
      width:100%;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    table#t01 tr:nth-child(even) {
      background-color: #eee;
    }
    table#t01 tr:nth-child(odd) {
     background-color: #fff;
    }
    table#t01 th {
      background-color: black;
      color: white;
    }
    </style>
Dear <?php echo($name) ?>
<br>
Congratulation you to win the product :
<br>
<table>
    <tr>
      <th>Product</th>
      <th>Name</th>
      <th>Day Start</th> 
      <th>Day End</th>
      <th>Price</th>
    </tr>
    <tr>
      <td><img width="100px" height="100px" src="https://auctionbackend.herokuapp.com/storage/<?php echo($product->image);?>" alt=""></td>
      <td><?php echo($product->name);?></td>
      <td><?php echo($product->day_start);?></td>
      <td><?php echo($product->day_end);?></td>
      <td><?php echo($product->current_price);?></td>
    </tr>
  </table>
  <br>
  We will contact you soon. 
  Thank you for using our service.