<h3><?php echo $job['Job']['title']; ?></h3>
<ul id="details">
	<li><strong>Location:</strong> <?php echo $job['Job']['city']; ?>, <?php echo $job['Job']['state']; ?></li>
	<li><strong>Job Type:</strong> <?php echo $job['Type']['name']; ?></li>
	<li><strong>Description:</strong><?php echo $job['Job']['description']; ?></li>
	<li><strong>Contact Email:</strong><a href="mailto:<?php echo $job['Job']['contact_email']; ?>"><?php echo $job['Job']['contact_email']; ?></a></li>
</ul>
<p><a href="<?php echo $this->webroot; ?>jobs/browse">Back to Jobs Listings</a></p>