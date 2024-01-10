<?php 
include_once "header.php"; 
include_once "Database.php"; 
 
$db = new Database(); // Initialize the $db variable 
 
// Initialize variables to hold client data 
$cli_id = ''; 
$cli_series = ''; 
$cli_name = ''; 
$cli_num_of_laps = ''; 
$area_code = ''; 
$cli_code = ''; 
$cli_location = ''; 
$time_period = ''; 
$monthly = ''; 
$total = ''; 
$paid = ''; 
$remaining = ''; 
$sales_name = ''; 
 
if (isset($_GET['id'])) { 
    $cli_id = $_GET['id']; 
    // Fetch client information from the database using $cli_id 
    $clientInfo = $db->GetData("SELECT * FROM client_information WHERE cli_id = " . $cli_id); 
    $clientData = mysqli_fetch_assoc($clientInfo); 
 
    // Populate form variables with client data 
    $cli_series = $clientData['cli_series']; 
    $cli_name = $clientData['cli_name']; 
    $cli_num_of_laps = $clientData['cli_num_of_labs']; // Make sure the column name is correct 
    $area_code = $clientData['area_code']; 
    $cli_code = $clientData['cli_code']; 
    $cli_location = $clientData['cli_location']; 
    $time_period = $clientData['time_period']; 
    $monthly = $clientData['monthly']; 
    $total = $clientData['total']; 
    $paid = $clientData['paid']; 
    $remaining = $clientData['remaining']; 
    $sales_name = $clientData['sales_name']; 
} 
?> 
<div class="login-page"> 
    <div class="container"> 
        <div class="login-body"> 
            <?php 
            if (isset($_POST["btn"])) { 
                // Capture form data 
                $cli_id = $_POST['cli_id']; 
                $cli_series = $_POST['cli_series']; 
                $cli_name = $_POST['cli_name']; 
                $cli_num_of_laps = $_POST['cli_num_of_laps']; 
                $area_code = $_POST['area_code']; 
                $cli_code = $_POST['cli_code']; 
                $cli_location = $_POST['cli_location']; 
                $time_period = $_POST['time_period']; 
                $monthly = $_POST['monthly']; 
                $total = $_POST['total']; 
                $paid = $_POST['paid']; 
                $remaining = $_POST['remaining']; 
                $sales_name = $_POST['sales_name']; 
 
                // Execute the update statement 
                $msg = $db->RunDML( 
                    "UPDATE client_information SET cli_series = ?, cli_name = ?, cli_num_of_labs = ?, area_code = ?, cli_code = ?, cli_location = ?, time_period = ?, monthly = ?, total = ?, paid = ?, remaining = ?, sales_name = ? WHERE cli_id = ?", 
                    [$cli_series, $cli_name, $cli_num_of_laps, $area_code, $cli_code, $cli_location, $time_period, $monthly, $total, $paid, $remaining, $sales_name, $cli_id] 
                ); 
 
                if ($msg == "ok") { 
                    echo "<div class='alert alert-success'>User has been updated successfully</div>"; 
                    // Redirect to the table page after successful update 
                    echo "<script>setTimeout(function(){ window.location.href = 'table.php'; }, 2500);</script>"; 
                } else { 
                    echo "<div class='alert alert-danger'>Error: " . $msg . "</div>"; 
                } 
            } 
            ?> 
 
 
            <form method="post" action=""> 
                <input type="hidden" name="cli_id" value="<?php echo htmlspecialchars($cli_id); ?>"> 
                <input type="text" name="cli_series" placeholder="Series" value="<?php echo htmlspecialchars($cli_series); ?>"> 
                <input type="text" name="cli_name" placeholder="User Name" value="<?php echo htmlspecialchars($cli_name); ?>"> 
                <input type="text" name="cli_num_of_laps" class="lock" placeholder="Num Of Laps" value="<?php echo htmlspecialchars($cli_num_of_laps); ?>"> 
                <select class="lock form-control" style="height:50px;" name="area_code" id=""> 
                    <option value="">Area Code</option> 
                    <option value="A" <?php echo ($area_code == 'A') ? 'selected' : ''; ?>>A</option> 
                    <option value="B" <?php echo ($area_code == 'B') ? 'selected' : ''; ?>>B</option>
                    <option value="C" <?php echo ($area_code == 'C') ? 'selected' : ''; ?>>C</option> 
                    <option value="D" <?php echo ($area_code == 'D') ? 'selected' : ''; ?>>D</option> 
                    <option value="E" <?php echo ($area_code == 'E') ? 'selected' : ''; ?>>E</option> 
                    <option value="F" <?php echo ($area_code == 'F') ? 'selected' : ''; ?>>F</option> 
                    <option value="G" <?php echo ($area_code == 'G') ? 'selected' : ''; ?>>G</option> 
                    <option value="H" <?php echo ($area_code == 'H') ? 'selected' : ''; ?>>H</option> 
                    <option value="I" <?php echo ($area_code == 'I') ? 'selected' : ''; ?>>I</option> 
                    <option value="J" <?php echo ($area_code == 'J') ? 'selected' : ''; ?>>J</option> 
                    <option value="K" <?php echo ($area_code == 'K') ? 'selected' : ''; ?>>K</option> 
                    <option value="L" <?php echo ($area_code == 'L') ? 'selected' : ''; ?>>L</option> 
                    <option value="M" <?php echo ($area_code == 'M') ? 'selected' : ''; ?>>M</option> 
                    <option value="N" <?php echo ($area_code == 'N') ? 'selected' : ''; ?>>N</option> 
                    <option value="O" <?php echo ($area_code == 'O') ? 'selected' : ''; ?>>O</option> 
                    <option value="P" <?php echo ($area_code == 'P') ? 'selected' : ''; ?>>P</option> 
                    <option value="Q" <?php echo ($area_code == 'Q') ? 'selected' : ''; ?>>Q</option> 
                    <option value="R" <?php echo ($area_code == 'R') ? 'selected' : ''; ?>>R</option> 
                    <option value="S" <?php echo ($area_code == 'S') ? 'selected' : ''; ?>>S</option> 
                    <option value="T" <?php echo ($area_code == 'T') ? 'selected' : ''; ?>>T</option> 
                    <option value="U" <?php echo ($area_code == 'U') ? 'selected' : ''; ?>>U</option> 
                    <option value="V" <?php echo ($area_code == 'V') ? 'selected' : ''; ?>>V</option> 
                    <option value="W" <?php echo ($area_code == 'W') ? 'selected' : ''; ?>>W</option> 
                    <option value="X" <?php echo ($area_code == 'X') ? 'selected' : ''; ?>>X</option> 
                    <option value="Y" <?php echo ($area_code == 'Y') ? 'selected' : ''; ?>>Y</option> 
                    <option value="Z" <?php echo ($area_code == 'Z') ? 'selected' : ''; ?>>Z</option> 
                </select> 
                <input type="text" name="cli_code" class="lock" placeholder="Lap Code" style="margin-top:15px;" value="<?php echo $cli_code; ?>"> 
                <input type="text" name="cli_location" class="lock" placeholder="Location" value="<?php echo $cli_location; ?>"> 
                <input type="text" name="monthly" class="lock" placeholder="Monthly" value="<?php echo $monthly; ?>"> 
                <input type="text" name="total" class="lock" placeholder="Total" value="<?php echo $total; ?>"> 
                <input type="text" name="paid" class="lock" placeholder="Paid" value="<?php echo $paid; ?>"> 
                <input type="text" name="remaining" class="lock" placeholder="Remaining" value="<?php echo $remaining; ?>"> 
                <input type="text" name="sales_name" class="lock" placeholder="Sales Name" value="<?php echo $sales_name; ?>"> 
 
                <select class="lock form-control" style="height:50px;" name="time_period" id=""> 
                    <option value="">Time Period</option> 
                    <option value="1m" <?php echo ($time_period == '1m') ? 'selected' : ''; ?>>1M</option> 
                    <option value="2m" <?php echo ($time_period == '2m') ? 'selected' : ''; ?>>2M</option> 
                    <option value="3m" <?php echo ($time_period == '3m') ? 'selected' : ''; ?>>3M</option> 
                    <option value="4m" <?php echo ($time_period == '4m') ? 'selected' : ''; ?>>4M</option> 
                    <option value="5m" <?php echo ($time_period == '5m') ? 'selected' : ''; ?>>5M</option> 
                    <optionvalue="6m" <?php echo ($time_period == '6m') ? 'selected' : ''; ?>>6M</optionvalue=> 
                    <option value="7m" <?php echo ($time_period == '7m') ? 'selected' : ''; ?>>7M</option> 
                    <option value="8m" <?php echo ($time_period == '8m') ? 'selected' : ''; ?>>8M</option> 
                    <option value="9m" <?php echo ($time_period == '9m') ? 'selected' : ''; ?>>9M</option> 
                    <option value="10m" <?php echo ($time_period == '10m') ? 'selected' : ''; ?>>10M</option> 
                    <option value="11m" <?php echo ($time_period == '11m') ? 'selected' : ''; ?>>11M</option> 
                    <option value="12m" <?php echo ($time_period == '12m') ? 'selected' : ''; ?>>12M</option> 
 
                </select> 
 
                <div style="margin-top: 15px;"> 
                    <input type="submit" name="btn" value="Submit "> 
                </div> 
            </form> 
        </div> 
    </div> 
 
</div>