<div class="container content">
	<h1>Hotels</h1>

	<table class='table table-striped'>
		<tr>
			<th>Hotel Code</th>
			<th>Hotel Name</th>
			<th>Hotel Location</th>
		</tr>
	<?php foreach ($hotels as $hotel):?>
		<tr>
			<td><?php echo $hotel->hotel_code;?></td>
			<td><?php echo $hotel->name;?></td>
			<td><?php echo $hotel->location;?></td>
		</tr>
	<?php endforeach;?>
	</table>

	<a href="create">
		<button class='btn'>Add Hotel</button>
	</a>
</div>