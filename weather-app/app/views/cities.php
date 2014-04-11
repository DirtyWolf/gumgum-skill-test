<?php render('_header')?>
	
		<h1>Select Cities</h1>
		
		<p>Select the cities you want to activate in the map view.</p>
		
		<form role="form" id="cities-form">
			<?php foreach ($cities as $city) { ?>
				<div class="checkbox">
				    <label>
				      <input type="checkbox" id="city-<?php echo $city->code ?>" name="city-select" class="city-checkbox" value="<?php echo $city->code ?>" <?php if($city->select)echo('checked'); ?>> <?php echo $city->city ?>
				    </label>
				  </div>
			<?php } ?>
			<button type="submit" id="form-submit" class="btn btn-default">Submit</button>
		</form>
		
		<p id="message"></p>

<?php render('_footer')?>