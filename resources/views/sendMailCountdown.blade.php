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
Your Product :
<br>
<table>
    <tr>
      <th>Product</th>
      <th>Day Start</th> 
      <th>Day End</th>
      <th>Price</th>
    </tr>
    <tr>
      <td><img src="https://auctionbackend.herokuapp.com/storage/<?php echo($product->image);?>" alt=""></td>
      <td><?php echo($product->day_start);?></td>
      <td><?php echo($product->day_end);?></td>
      <td><?php echo($product->current_price);?></td>
    </tr>
  </table>
  Has been time out.
  <br>
  If you want to re-auction, please send a new post. We will check soon.
  Thank you for using our service. 