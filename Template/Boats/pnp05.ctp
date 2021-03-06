<?php
$this->extend('pnp05a');
?>

<?= $this->start('sidebar');?>
	<fieldset>
		<label for="locationType">Select a location type</label>
		<select name="locationType" id="locationType">
		  <option selected="selected" id="boat">Boat</option>
		  <option id="bike">Bike</option>
		</select>
	</fieldset>
	<div id="option1"></div>
	<div id="option2"></div>
<?php $this->end(); ?>		
			
<?= $this->start('map1');?>
	<div id="tabs1">
		<ul>
			<li><a href="#tab-map1"><span>map</span></a></li> 
			<li><a href="#tab-details1"><span>details</span></a></li> 
		</ul>
		<div id="tab-map1" class="lh-tab"> 
			<div id="map1"></div>
		</div>
		<div id="tab-details1" class="lh-tab">
			<div id="places" class="info"></div>
		</div>
	</div>
	<div id="map1latlonTable"></div>
<?php $this->end(); ?>		

<?= $this->start('map2');?>
	<div id="tabs2">
		<ul>
			<li><a href="#tab-map2"><span>map</span></a></li> 
			<li><a href="#tab-details2"><span>details</span></a></li> 
			<a href="#" id="placename" class="brand">searching...</a>
		</ul>
		<div id="tab-map2" class="rh-tab"> 
			<div id="map2_buttons"></div>
			<div id="map2"></div>
		</div>
		<div id="tab-details2" class="rh-tab">
			<div id="place2"></div>
		</div>
	</div>
<?php $this->end(); ?>		

<?= $this->start('footer');?>
	<div id="footer">	
		<div id="map2latlonTable">
		</div> 
	</div>

	<div id="place" title="edit" style="visibility: hidden">
	</div>

	<div id="loginPopup" title="Basic dialog" style="visibility: hidden">
		<form action="/cake3/users/login2" method="post">
			<input name="username" id="username" />
			<input name="password" id="password" value=""/>
			<input type="submit" value="login">
		</form>
	</div>
<?php $this->end(); ?>		
