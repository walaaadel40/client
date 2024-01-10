<?php

include_once "headerBefore.php";

?>
<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Login to your account</h3>  
			<div class="login-body">



			<?php
						if(isset($_COOKIE["user"]))
						{
						$_SESSION["id"]=$_COOKIE["user"];
						echo "<script>window.open('home.php','_parent');</script>";

						}


						if(isset($_POST["btn"]))
						{
						include_once "Database.php";
						$db=new Database();
						$result=$db->GetData("select * from client where(cli_name='".$_POST["user"]."'or cli_phone='".$_POST["user"]."') and cli_password='".$_POST["password"]."'");					
						if ($row=mysqli_fetch_assoc($result))
						{
						if($_POST["user"]=="admin")
						{

						echo "<script>window.open('home.php','_parent');</script>";
					}
					else
					{
					$_SESSION["id"]=$row["cli_id"];
					$_SESSION["name"]=$row["cli_name"];

					if (isset($_POST["chk"]))
					{
					$_cookie_name="user";
					$_cookie_value=$row["cli_id"];
					setcookie($_cookie_name,$_cookie_value,time()+(86400*30),"");

					}
					echo "<script>window.open('home.php','_parent');</script>";

				}
		
				}
					else
					echo "<div class=' alert alert-danger'> 'Invaled Email Or Password'</div>";

						}

						?>




		
				<form id="loginForm"   action=""   method="post">
					<input type="text" class="user" name="user" placeholder="Enter your email" id="email">
					<input type="password" name="password" class="lock" placeholder="Password" id="password" >
					<input type="submit"  name="btn"   value="Login">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="chk"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>  
			<h6> Not a Member? <a href="regester.php" >Sign Up Now »</a> </h6> 
			<div class="login-page-bottom social-icons">
				<h5>Recover your social account</h5>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul> 
			</div>
		</div>
	</div>





</body>

