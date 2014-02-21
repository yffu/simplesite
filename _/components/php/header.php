<script>
$('.dropdown-toggle').dropdown();
</script>
<div class="content-row">
	<div class="col-lg-12">
		<header class="clearfix">
			<section id="branding">
				<a href="index.php"><img src="images/misc/help_logo.png" alt="Logo for hospital compare"></a>
			</section>
			<section class="navbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php"> Home</a></li>
					<li><a href="findhosp.php"> Find Hospital</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="hosptype.php"> 
							Hospital Types
							<span class="caret"></span> 
						</a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							<li>
								<a tabindex="-1" href="hosptype.php">
									Private Hospitals	
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a tabindex="-1" href="hosptype.php">
									Public Hospitals
								</a>
							</li>
							<li class="divider"></li>
														<li>
								<a tabindex="-1" href="hosptype.php">
									Research Institution Hospitals
								</a>
							</li>
							<li class="divider"></li>
							</ul><!-- dropdown menu -->
					</li>
					<li><a href="treatment.php"> Treatment Types</a></li>
					<li><a href="claim.php"> Claim Types</a></li>
					<li><a href="rate.php"> Rate Hospital</a></li>
					<li><a href="register.php"> Register</a></li>
					<li><a href="about.php"> About</a></li>
					
				</ul>
			</section>
			<section>
				<div class="dropdown">
					<button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">
						Dropdown
					</button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					 	<li role="presentation"><a role="menuitem" tabindex="-1" >Action</a></li>
					</ul>
				</div>
			</section>
		</header>	
	</div>

</div>