<!-- Search bar html code -->
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
		<select id="category_select" name="category">
			<option>Select Category</option>		
			<?php foreach($categories as $category): ?>
				<option value="<?php echo $category['Category']['id']; ?>" ><?php echo $category['Category']['name']; ?>a</option>
			<?php endforeach; ?>
		</select>
		<button type="submit">Submit</button>
	</form>
</div>