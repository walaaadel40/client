<?php  
include_once "header.php";  
?>  
 
  
<style> 
/* Base styles for the table */ 
.responsive-table-container { 
  overflow-x: auto; 
  margin-left: 30px; 
  width: 95%; 
} 
 
table { 
  width: 100%; 
  border-collapse: collapse; 
  white-space: nowrap; 
} 
 
th, td { 
  padding: 8px; 
  text-align: center; 
  border: 2px solid black; 
} 
 
/* Sticky first column */ 
@media screen and (max-width: 1060px) { 
  .sticky-first-column th:first-child, 
  .sticky-first-column td:first-child { 
    position: -webkit-sticky; /* for Safari */ 
    /* position: sticky;  */
    left: 0; 
    background-color: gray; 
    z-index: 2; 
  } 
} 
 
/* Ensure the total row is not sticky */ 
.sticky-first-column tr.total-row td:first-child { 
  position: static; 
  background-color: transparent; 
} 
 
</style> 
 
 
 
<div class="responsive-table-container"> 
<table class="sticky-first-column"> 
        <thead>  
        <tr >  
            <th style="text-align:center;">Series</th>  
            <th style="text-align:center;">Name</th>  
            <th style="text-align:center;">Number Of Labs</th>  
            <th style="text-align:center;">Area Code</th>  
            <th style="text-align:center;">CLient Code</th>  
            <th style="text-align:center;">Client Location</th>  
            <th style="text-align:center;">Time Period</th>  
            <th style="text-align:center;">Monthly</th>  
            <th style="text-align:center;">Total</th>  
            <th style="text-align:center;">Paid</th>  
            <th style="text-align:center;">Remaining</th>  
            <th style="text-align:center;">Sales Name</th>  
            <th style="text-align:center;">Inserted Time</th>  
 
 
        </tr>  
        
    </thead>  
    <tbody id="clientTable">  
 
 
    <?php  
    include_once "Database.php";  
    $db = new Database();  
    $result = $db->GetData("SELECT * FROM client_information");  
 
    // Initialize the totals 
    $total_sum = 0; 
    $paid_sum = 0; 
    $remaining_sum = 0; 
 
    while ($row = mysqli_fetch_assoc($result)) {  
        echo "<tr>";  
        echo "<td>" . $row['cli_series'] . "</td>";  
        echo "<td>" . $row['cli_name'] . "</td>";  
        echo "<td>" . $row['cli_num_of_labs'] . "</td>";  
        echo "<td>" . $row['area_code'] . "</td>";  
        echo "<td>" . $row['cli_code'] . "</td>";  
        echo "<td>" . $row['cli_location'] . "</td>";  
        echo "<td>" . $row['time_period'] . "</td>";  
        echo "<td>" . $row['monthly'] . "</td>";  
        echo "<td>" . $row['total'] . "</td>";  
        echo "<td>" . $row['paid'] . "</td>";  
        echo "<td>" . $row['remaining'] . "</td>";  
        echo "<td>" . $row['sales_name'] . "</td>";  
        echo "<td>" . $row['inserted_time'] . "</td>";  
        echo "<td><a href='edit.php?id=" . $row['cli_id'] . "'><input type='submit' name='edit' value='edit'></a></td>"; 
        echo "</tr>";  
 
        // Add the current row's values to the totals 
        $total_sum += $row['total']; 
        $paid_sum += $row['paid']; 
        $remaining_sum += $row['remaining']; 
    }  
 
   // Total row 
   echo "<tr class='total-row'>"; 
   echo "<td colspan='8'>Total</td>";  
   echo "<td>" . $total_sum . "</td>"; 
   echo "<td>" . $paid_sum . "</td>"; 
   echo "<td>" . $remaining_sum . "</td>"; 
   echo "<td colspan='3'></td>"; 
   echo "</tr>"; 
 
   $db->CloseConnection();  
?>  
 
    </tbody>  
</table>     
</div> 
 
        <div style="width:30%; margin-top:5px;margin-left:30px;"> 
    <button onclick="printPage()" class="alert- info ">Print Page</button> 
            <script> 
        function printPage() { 
            window.print(); 
        } 
        </script> 
        </div>