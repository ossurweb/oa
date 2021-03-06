<?php
$menu = 'find';
include('../includes/header.php');
?>

<section id="provider-location" class="first-section">
		<div class="bh-sl-container">
	
				<div class="container carousel-backrg store-locator-first-section headline-main  ">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
				<div class="col-xs-12 col-md-10">
					<h3 class="bh-sl-title">Find a practitioner</h3>
					<p>Talk to your doctor about getting an Össur Unloader brace for your knee osteoarthritis. Once prescribed, visit an orthotist or use our search tool to find a practitioner near you who can get you fit with the right brace.</p>
				</div>

					<div class="bh-sl-form-container">
						<form id="bh-sl-user-location" class="form-inline" method="post" action="#" role="form">
							<div class="form-input form-group">
								<div class="col-xs-9 col-sm-8 col-md-8">
								<label class="hidden-xs" for="bh-sl-address">Enter Zip Code or enter City/State:</label>

								<label class="visible-xs" for="bh-sl-address">Zip/City/State</label>
								<input class="form-control" type="text" id="bh-sl-address" name="bh-sl-address" />
								</div>
							<div class="col-xs-3 col-sm-5 col-md-2">
								<label for="bh-sl-address">Radius</label>
									<select id="bh-sl-maxdistance"  name="bh-sl-maxdistance">
						                <option value="10" data-ga-type="Find tool" data-ga-title="10">10 miles</option>
						                <option value="25" data-ga-type="Find tool" data-ga-title="25">25 Miles</option>
						                <option value="50" data-ga-type="Find tool" data-ga-title="50">50 Miles</option>
						                <option value="100" data-ga-type="Find tool" data-ga-title="100">100 Miles</option>
					              	</select>
							</div>
							</div>
						
						<button id="bh-sl-submit" class="btn btn-default unloader-btn" type="submit" data-ga-type="Find tool" data-ga-title="Search a practitioner"><span><img src="../img/search_icon.png"></span>&nbsp;Search practitioner</button>

						<button class="btn btn-default unloader-btn-2">Or</button>

						<button id="bh-sl-find" class="btn btn-default unloader-btn-1" data-ga-type="Find tool" data-ga-title="Find a practitioner near me"><span><img src="../img/find_icon.png"></span>&nbsp;Find a practitioner near me</button>	
						</form>


					</div>
				</div>
			</div>
	

			<div id="bh-sl-map-container" class="bh-sl-map-container ">
				
				
					<div id="map-results-container" class="container no-padding">
					<button id="hide-list" class="btn btn-default unloader-btn toggle-list ">Hide list</button>
					<button id="show-list" class="btn btn-default unloader-btn toggle-list">Show list</button>
						<div id="bh-sl-map" class="bh-sl-map col-md-12"></div>
						<div class="bh-sl-loc-list col-md-3">
							<ul class="list list-unstyled"></ul>
						</div>
					</div>
				
      </div>
    
      </div>


</section>





<?php

include('../includes/store-locator.php');
?>