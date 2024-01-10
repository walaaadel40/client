<?php 
include_once "headerAfter.php"; 
?> 
 
<table border="1" style="margin-left:30px; width:95%; text-align:center;"> 
    <thead> 
        <tr > 
            <th style="text-align:center;">ID</th> 
            <th style="text-align:center;">Name</th> 
            <th style="text-align:center;">Email</th> 
            <th style="text-align:center;">Password</th> 
            <th style="text-align:center;">Address</th> 
            <th style="text-align:center;">Phone</th> 
            <th style="text-align:center;">AreaCode</th> 
        </tr> 
    </thead> 
    <tbody id="clientTable"> 





        <?php 
            include_once "Database.php"; 
            $db = new Database(); 
            $result = $db->GetData("SELECT * FROM client"); 
            while ($row = mysqli_fetch_assoc($result)) { 
                echo "<tr>"; 
                echo "<td>" . $row['cli_id'] . "</td>"; 
                echo "<td>" . $row['cli_name'] . "</td>"; 
                echo "<td>" . $row['cli_email'] . "</td>"; 
                echo "<td>" . $row['cli_password'] . "</td>"; 
                echo "<td>" . $row['cli_address'] . "</td>"; 
                echo "<td>" . $row['cli_phone'] . "</td>"; 
                echo "<td>" . $row['area_code'] . "</td>"; 
                echo "</tr>"; 
            } 
            $db->CloseConnection(); 
        ?> 
    </tbody> 
</table>    

        <div style="width:30%; margin-top:5px;margin-left:25px;">
    <button onclick="printPage()" class="alert- info ">Print Page</button>
            <script>
        function printPage() {
            window.print();
        }
        </script>
        </div>










