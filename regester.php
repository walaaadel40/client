<?php 
include_once "header.php"; 
?> 
<div class="login-page"> 
    <div class="container"> 
        <div class="login-body"> 
            <form method="post" action=""> 
 
                <?php 
                if (isset($_POST["btn"])) { 
                    include_once "Database.php"; 
                    $db = new Database(); 
 
                    // تحقق من الإدخالات واستخدام Prepared Statements 
                    $cli_series = mysqli_real_escape_string($db->conn, $_POST["cli_series"]); 
                    $cli_name = mysqli_real_escape_string($db->conn, $_POST["cli_name"]); 
                    $cli_num_of_laps = mysqli_real_escape_string($db->conn, $_POST["cli_num_of_laps"]); 
                    $area_code = mysqli_real_escape_string($db->conn, $_POST["area_code"]); 
                    $cli_code = mysqli_real_escape_string($db->conn, $_POST["cli_code"]); 
                    $cli_location = mysqli_real_escape_string($db->conn, $_POST["cli_location"]); 
                    $time_period = mysqli_real_escape_string($db->conn, $_POST["time_period"]); 
                    $monthly = mysqli_real_escape_string($db->conn, $_POST["monthly"]); 
                    $total = mysqli_real_escape_string($db->conn, $_POST["total"]); 
                    $paid = mysqli_real_escape_string($db->conn, $_POST["paid"]); 
                    $remaining = mysqli_real_escape_string($db->conn, $_POST["remaining"]); 
                    $sales_name = mysqli_real_escape_string($db->conn, $_POST["sales_name"]); 
 
 
 
 
 
 
                    // استخدام Prepared Statements لتجنب SQL injection 
                    $msg = $db->RunDML( 
                        "INSERT INTO client_information 
                        (cli_series, cli_name, cli_num_of_labs, area_code, cli_code, cli_location, time_period, monthly, total, paid, remaining, sales_name) 
                        VALUES 
                        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?); 
                        ", 
                        [$cli_series, $cli_name, $cli_num_of_laps, $area_code, $cli_code, $cli_location,$time_period,$monthly, $total, $paid,  $remaining, $sales_name] 
                    ); 
                     
                    if ($msg == "ok") { 
                        echo "<div class='alert alert-success'>User has been added successfully</div>"; 
                        echo "<script>setTimeout(function(){ window.location.href = 'table.php'; }, 2500);</script>"; 
                    } else { 
                        echo "<div class='alert alert-danger'>Error</div>"; 
                    } 
                }                     
                ?> 
                <input type="text" name="cli_series" placeholder="Series" required> 
                <input type="text" name="cli_name" placeholder="User Name" required> 
                <input type="text" name="cli_num_of_laps" class="lock" placeholder="Num Of Laps" required> 
                <select class="lock form-control" style="height:50px;" name="area_code" id="" required> 
                    <option value="">Area Code</option> 
                    <option value="A">A</option> 
                    <option value="B">B</option> 
                    <option value="C">C</option> 
                    <option value="D">D</option> 
                    <option value="E">E</option> 
                    <option value="F">F</option> 
                    <option value="G">G</option> 
                    <option value="H">H</option> 
                    <option value="I">I</option> 
                    <option value="J">J</option> 
                    <option value="K">K</option> 
                    <option value="L">L</option> 
                    <option value="M">M</option> 
                    <option value="N">N</option> 
                    <option value="O">O</option> 
                    <option value="P">P</option> 
                    <option value="Q">Q</option> 
                    <option value="R">R</option> 
                    <optionvalue="S">S</optionvalue=> 
                    <option value="T">T</option> 
                    <option value="U">U</option> 
                    <option value="V">V</option> 
                    <option value="W">W</option> 
                    <option value="X">X</option> 
                    <option value="Y">Y</option> 
                    <option value="Z">Z</option> 
 
                </select> 
                <input type="text" name="cli_code" class="lock" placeholder="Lap Code" required style="margin-top:15px;"> 
                <input type="text" name="cli_location" class="lock" placeholder="Location" required> 
                 
                <select class="lock form-control" style="height:50px;" name="time_period" id="" required> 
                    <option value="">Time Period</option> 
                    <option value="1m">1M</option> 
                    <option value="2m">2M</option> 
                    <option value="3m">3M</option> 
                    <option value="4m">4M</option> 
                    <option value="5m">5M</option> 
                    <option value="6m">6M</option> 
                    <option value="7m">7M</option> 
                    <option value="8m">8M</option> 
                    <option value="9m">9M</option> 
                    <option value="10m">10M</option> 
                    <option value="11m">11M</option> 
                    <option value="12m">12M</option> 
 
                </select> 
                <input type="text" name="monthly" class="lock" placeholder="Monthly" required style="margin-top:15px;"> 
                <input type="text" name="total" class="lock" placeholder="Total" required> 
                <input type="text" name="paid" class="lock" placeholder="Paid" required> 
                <input type="text" name="remaining" class="lock" placeholder="Remaining" required> 
                <input type="text" name="sales_name" class="lock" placeholder="Sales Name" required> 
 
                <div style="margin-top: 15px;"> 
                    <input type="submit" name="btn" value="Submit "> 
                </div> 
            </form> 
        </div> 
    </div> 
 
</div>