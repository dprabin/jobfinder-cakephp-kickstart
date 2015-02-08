<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('kickstart');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery');
		echo $this->Html->script('kickstart');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>


<body>
<div id="container" class="grid">
<header>
	<div class="col_6 column">
		<h1><a href="index.html"><strong>Job</strong>Finds</a></h1>
	</div>
	<div class="col_6 column right">
		<form id="add_job_link">
			<button class="large green"><i class="fa fa-plus"></i>Add Job</button>
		</form>
	</div>
</header>


<!-- Menu Horizontal -->
<div class="col_12 column">
	<ul class="menu">
		<li class="current"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="jobs.html"><i class="fa fa-desktop"></i> Browse Jobs</a></li>
		<li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
		<li><a href="login.html"><i class="fa fa-key"></i> Login</a></li>
	</ul>
</div>

<!-- Search -->


<div id="search_area" class="col_12 column">
	<form class="horizontal" method="post" action="#">
		<input id="keywords" type="text" placeholder="Enter Keywords ..." />
		<select id="state_select">
			<option>Select Country</option>
			<option value="Nepal">Nepal</option>
			<option value="India">India</option>
			<option value="Qatar">Qatar</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
		</select>
		<select id="category_select">
			<option>Select Category</option>
			<option value="Banking and Accounting">Banking and Accounting</option>
			<option value="Construction">Construction</option>
			<option value="Fashion and Style">Fashion and Style</option>
			<option value="Food and Restaurant">Food and Restaurant</option>
			<option value="Healthcare">Healthcare</option>
			<option value="Retail and Sales">Retail and Sales</option>
			<option value="Technology">Technology</option>
		</select>
		<button type="submit">Submit</button>
	</form>
</div>


<!-- Job listing -->
<div class="col_12 column">
	<h3>Latest Job Listings</h3>
	<ul id="listings">
		<li>
			<div class="type"><span class="green">Full Time</span></div>
			<div class="description">
				<h5>Senior Graphic Designer (Kathmandu, Nepal)</h5>
				Senior graphics designer is required for a  reputed publishing company. He/she will be responsible for overall graphics designing, instructing fellow designers and finalizing the designs. <a href="details.html"><i class="fa fa-plus"></i>Read More</a>
			</div>
		</li>
		<li>
			<div class="type"><span class="blue">Part Time</span></div>
			<div class="description">
				<h5>Senior Graphic Designer (Kathmandu, Nepal)</h5>
				Senior graphics designer is required for a  reputed publishing company. He/she will be responsible for overall graphics designing, instructing fellow designers and finalizing the designs. <a href="details.php"><i class="fa fa-plus"></i>Read More</a>
			</div>
		</li>
		<li>
			<div class="type"><span class="green">Full Time</span></div>
			<div class="description">
				<h5>Senior Graphic Designer (Kathmandu, Nepal)</h5>
				Senior graphics designer is required for a  reputed publishing company. He/she will be responsible for overall graphics designing, instructing fellow designers and finalizing the designs. <a href="details.php"><i class="fa fa-plus"></i>Read more</a>
			</div>
		</li>
	</ul>
</div>

<div class="clearfix"></div>


<footer>
	<p>Copyright @copy; 2015, JobFinds, All Rights Reserved</p>
</footer>



</div> <!-- End Grid -->
</body>
</html>