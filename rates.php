<?php 
	// $body_class = "no-scroll";
	require_once('top.php'); 
	require_once('nav.php'); 
?>
<?php ?>
<script type="text/javascript">
window.addEventListener("load", function() {
    var canvas = document.getElementById("3DView");
	var options = {
	   globeBackColor: "#333333FF",
	   globeFrontColor: "#888888aa",
	   globeLinesColor: "#000000FF"
	};

	var globe = new Globe(canvas,options);

	var clickCallback = function() {
	   //console.log("cliked on image");
	};

	var img = new Image();
	img.src = "img/pin.png";

	globe.addImage(22.3964, 114.1095, img);
	globe.addImage(12.8797, 121.7740, img);
	globe.addImage(51.5074, 0.1278, img);
	globe.addImage(41.8781, 87.6298, img);
	globe.addImage(33.9391, 67.7100, img);
	globe.addImage(61.5240, 105.3188, img);

	window.setInterval(function() {
		globe.addImage(22.3964, 114.1095, img);
		globe.addImage(12.8797, 121.7740, img);
		globe.addImage(51.5074, 0.1278, img);
		globe.addImage(41.8781, 87.6298, img);
		globe.addImage(33.9391, 67.7100, img);
		globe.addImage(61.5240, 105.3188, img);
   }, 3000);
})
</script>
<!-- flag selector css -->
<link rel="stylesheet" href="country_flag_selector/css/countrySelect.css">
<link rel="stylesheet" href="country_flag_selector/css/demo.css">
<!-- end flag selector css -->
<section id="home" class="container-fluid full-height">
	<div class="row full-height">
		<div class="col-md-5 full-height no-padding">
			
			<!--
			<div class="left-panel full-height middle-content" style="background: #000; overflow-x: hidden;">
				<div class="row text-center">
					<canvas id="3DView" ></canvas>
				</div>
			</div>
			-->
		</div>
		<div class="col-md-7 no-padding full-height">
			<div class="right-panel full-height middle-content">
				<div class="row">
					<div class="col-md-9 col-md-offset-1">
						<div class="spacer30"></div>
						<h3 class="uppercase">International Long Distance Rates</h3>
						<div class="spacer20"></div>
						<p>Cut down your international phone bills now with rock-bottom rates to countries all around the world.</p>
						<div class="spacer10"></div>
						<p>Our rates for calls to the Philippines, Vietnam, China, Taiwan and Hong Kong are among the cheapest in town!</p>
						<div class="spacer10"></div>
						<div class="row">
							<div class="spacer30"></div>
							<h3>Where do you want to call?</h3>
						</div>
						<div class="row text-center" id="top_country">
							<div class="col-xs-4 col-md-3 country-select" >
								<div class="selected-flag" title="United State">
									<input type="text" value="us" style="display:none;">
									<img class="img_flag" src="img/flag/US.png" >
									<span class="country_name">United State</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="China">
									<input type="text" value="cn" style="display:none;">
									<img class="img_flag" src="img/flag/CN.png" >
									<span class="country_name">China</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="Mixico">
									<input type="text" value="mx" style="display:none;">
									<img class="img_flag" src="img/flag/MX.png" >
									<span class="country_name">Mexico</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="Canada">
									<input type="text" value="ca" style="display:none;">
									<img class="img_flag" src="img/flag/CA.png" >
									<span class="country_name">Canada</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="Thailand">
									<input type="text" value="th" style="display:none;">
									<img class="img_flag" src="img/flag/TH.png" >
									<span class="country_name">Thailand</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="United Kingdom">
									<input type="text" value="gb" style="display:none;">
									<img class="img_flag" src="img/flag/GB.png" >
									<span class="country_name">United Kingdom</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="Colombia">
									<input type="text" value="co" style="display:none;">
									<img class="img_flag" src="img/flag/CO.png" >
									<span class="country_name">Colombia</span>
								</div>
							</div>
							<div class="col-xs-4 col-md-3 country-select">
								<div class="selected-flag" title="India">
									<input type="text" value="in" style="display:none;">
									<img class="img_flag" src="img/flag/IN.png" >
									<span class="country_name">India</span>
								</div>
							</div>
							
						</div>
						<div class="row" id="rate_option">
							<div class="row" id="">
								<div class="col-xs-12 col-md-6">
									<form>
										<div class="form-item">
											<input id="country_selector" type="text">
											<label for="country_selector" style="display:none;">Select a country here...</label>
										</div>
										<div class="form-item" style="display:none;">
											<input type="text" id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
											<label for="country_selector_code">...and the selected country code will be updated here</label>
										</div>
										<button type="submit" style="display:none;">Submit</button>
									</form>
								</div>
							</div>
							<div class="row" id="">								
								<div class="col-xs-12 col-md-6 col-md-offset-3">
									<div id="rate" class="box_shadow" style="display:none;">
									</div>	
								</div>
							</div>
						</div>

<!--						<p>The rates information is for reference only. Rates are subject to change without further notice.</p>
						<div class="spacer20"></div>
						<div id="rates">
							<div id="rates-alpha">
								<ul>
									<li><a href="#a" class="rates-a">A</a></li>
									<li><a href="#b" class="rates-a">B</a></li>
									<li><a href="#c" class="rates-a">C</a></li>
									<li><a href="#d" class="rates-a">D</a></li>
									<li><a href="#e" class="rates-a">E</a></li>
									<li><a href="#f" class="rates-a">F</a></li>
									<li><a href="#g" class="rates-a">G</a></li>
									<li><a href="#h" class="rates-a">H</a></li>
									<li><a href="#i" class="rates-a">I</a></li>
									<li><a href="#j" class="rates-a">J</a></li>
									<li><a href="#k" class="rates-a">K</a></li>
									<li><a href="#l" class="rates-a">L</a></li>
									<li><a href="#m" class="rates-a">M</a></li>
									<li><a href="#n" class="rates-a">N</a></li>
									<li><a href="#o" class="rates-a">O</a></li>
									<li><a href="#p" class="rates-a">P</a></li>
									<li><a href="#q" class="rates-a">Q</a></li>
									<li><a href="#r" class="rates-a">R</a></li>
									<li><a href="#s" class="rates-a">S</a></li>
									<li><a href="#t" class="rates-a">T</a></li>
									<li><a href="#u" class="rates-a">U</a></li>
									<li><a href="#v" class="rates-a">V</a></li>
									<li><a href="#w" class="rates-a">W</a></li>
									<li><a href="#x" class="rates-a">X</a></li>
									<li><a href="#y" class="rates-a">Y</a></li>
									<li><a href="#z" class="rates-a">Z</a></li>
								</ul>
							</div>
							<div id="rates-table">
								<table>
									<tr>
										<th>Destination</th>
										<th>Rate/minute</th>
									</tr>
									<tr id="a"><td>Afghanistan</td><td>$0.37</td></tr>
									<tr><td>Afghanistan (Cellular)</td><td>$0.37</td></tr>
									<tr><td>Albania</td><td>$0.25</td></tr>
									<tr><td>Albania (Cellular)</td><td>$0.46</td></tr>
									<tr><td>Algeria</td><td>$0.11</td></tr>
									<tr><td>Algeria (Cellular)</td><td>$0.65</td></tr>
									<tr><td>American Samoa</td><td>$0.04</td></tr>
									<tr><td>Andorra</td><td>$0.03</td></tr>
									<tr><td>Andorra (Cellular)</td><td>$0.23</td></tr>
									<tr><td>Angola</td><td>$0.07</td></tr>
									<tr><td>Angola (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Anguilla</td><td>$0.34</td></tr>
									<tr><td>Antigua & Barbuda</td><td>$0.33</td></tr>
									<tr><td>Antigua & Barbuda (Cellular)</td><td>$0.33</td></tr>
									<tr><td>Argentina</td><td>$0.03</td></tr>
									<tr><td>Argentina (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Armenia</td><td>$0.29</td></tr>
									<tr><td>Armenia (Cellular)</td><td>$0.24</td></tr>
									<tr><td>Aruba</td><td>$0.14</td></tr>
									<tr><td>Aruba (Cellular)</td><td>$0.26</td></tr>
									<tr><td>Australia</td><td>$0.02</td></tr>
									<tr><td>Australia (Cellular)</td><td>$0.04</td></tr>
									<tr><td>Australia (Cellular-SAT)</td><td>$0.04</td></tr>
									<tr><td>Australia NGN</td><td>$0.3</td></tr>
									<tr><td>Austria</td><td>$0.02</td></tr>
									<tr><td>Austria (Cellular)</td><td>$0.06</td></tr>
									<tr><td>Azerbaijan</td><td>$0.33</td></tr>
									<tr><td>Azerbaijan (Cellular)</td><td>$0.43</td></tr>
									<tr id="b"><td>Bahamas</td><td>$0.17</td></tr>
									<tr><td>Bahamas (Cellular)</td><td>$0.24</td></tr>
									<tr><td>Bahrain</td><td>$0.16</td></tr>
									<tr><td>Bahrain (Cellular)</td><td>$0.17</td></tr>
									<tr><td>Bangladesh</td><td>$0.04</td></tr>
									<tr><td>Bangladesh (Cellular)</td><td>$0.04</td></tr>
									<tr><td>Barbados</td><td>$0.21</td></tr>
									<tr><td>Barbados (Cellular)</td><td>$0.21</td></tr>
									<tr><td>Belarus</td><td>$0.45</td></tr>
									<tr><td>Belarus (Cellular)</td><td>$0.53</td></tr>
									<tr><td>Belgium</td><td>$0.05</td></tr>
									<tr><td>Belgium (Cellular)</td><td>$0.05</td></tr>
									<tr><td>Belize</td><td>$0.36</td></tr>
									<tr><td>Belize (Cellular)</td><td>$0.36</td></tr>
									<tr><td>Benin</td><td>$0.43</td></tr>
									<tr><td>Bermuda</td><td>$0.05</td></tr>
									<tr><td>Bhutan</td><td>$0.09</td></tr>
									<tr><td>Bolivia</td><td>$0.16</td></tr>
									<tr><td>Bolivia (Cellular)</td><td>$0.22</td></tr>
									<tr><td>Bosnia-Hercegovina</td><td>$0.21</td></tr>
									<tr><td>Bosnia-Hercegovina (Cellular)</td><td>$0.51</td></tr>
									<tr><td>Botswana</td><td>$0.16</td></tr>
									<tr><td>Botswana (Cellular)</td><td>$0.35</td></tr>
									<tr><td>Brazil</td><td>$0.03</td></tr>
									<tr><td>Brazil (Bell Horizonte)</td><td>$0.03</td></tr>
									<tr><td>Brazil (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Brazil (Rio)</td><td>$0.02</td></tr>
									<tr><td>Brazil (San Paolo)</td><td>$0.02</td></tr>
									<tr><td>British Virgin Islands</td><td>$0.38</td></tr>
									<tr><td>Brunei</td><td>$0.04</td></tr>
									<tr><td>Brunei (Cellular)</td><td>$0.05</td></tr>
									<tr><td>Bulgaria</td><td>$0.03</td></tr>
									<tr><td>Bulgaria (Cellular)</td><td>$0.54</td></tr>
									<tr><td>Burkina Faso</td><td>$0.46</td></tr>
									<tr><td>Burkina Faso (Cellular)</td><td>$0.39</td></tr>
									<tr id="c"><td>Cambodia</td><td>$0.08</td></tr>
									<tr><td>Cambodia (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Cameroon</td><td>$0.19</td></tr>
									<tr><td>Cameroon (Cellular)</td><td>$0.27</td></tr>
									<tr><td>Cape Verde</td><td>$0.31</td></tr>
									<tr><td>Cape Verde (Cellular)</td><td>$0.31</td></tr>
									<tr><td>Cayman Islands</td><td>$0.24</td></tr>
									<tr><td>Cent. African Rep.</td><td>$0.7</td></tr>
									<tr><td>Cent. African Rep. (Cellular)</td><td>$0.77</td></tr>
									<tr><td>Chad</td><td>$0.5</td></tr>
									<tr><td>Chad (Cellular)</td><td>$0.5</td></tr>
									<tr><td>Chile</td><td>$0.02</td></tr>
									<tr><td>Chile (Cellular)</td><td>$0.03</td></tr>
									<tr><td>China</td><td>$0.02</td></tr>
									<tr><td>China (Cellular)</td><td>$0.02</td></tr>
									<tr><td>Colombia</td><td>$0.05</td></tr>
									<tr><td>Colombia (Cellular)</td><td>$0.06</td></tr>
									<tr><td>Comoros</td><td>$0.52</td></tr>
									<tr><td>Comoros (Cellular)</td><td>$0.66</td></tr>
									<tr><td>Comoros (SS)</td><td>$0.66</td></tr>
									<tr><td>Congo</td><td>$0.7</td></tr>
									<tr><td>Congo (Cellular)</td><td>$0.68</td></tr>
									<tr><td>Costa Rica</td><td>$0.04</td></tr>
									<tr><td>Costa Rica (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Croatia</td><td>$0.1</td></tr>
									<tr><td>Croatia (Cellular)</td><td>$0.47</td></tr>
									<tr><td>Cyprus - South</td><td>$0.03</td></tr>
									<tr><td>Cyprus - South (Cellular)</td><td>$0.02</td></tr>
									<tr><td>Czech Republic</td><td>$0.02</td></tr>
									<tr><td>Czech Republic (Cellular)</td><td>$0.04</td></tr>
									<tr id="d"><td>Denmark</td><td>$0.02</td></tr>
									<tr><td>Djibouti</td><td>$0.53</td></tr>
									<tr><td>Djibouti (Cellular)</td><td>$0.53</td></tr>
									<tr><td>Dominica</td><td>$0.35</td></tr>
									<tr><td>Dominican Republic</td><td>$0.09</td></tr>
									<tr id="e"><td>Ecuador</td><td>$0.15</td></tr>
									<tr><td>Ecuador (Cellular)</td><td>$0.25</td></tr>
									<tr><td>Egypt</td><td>$0.08</td></tr>
									<tr><td>Egypt (Cellular)</td><td>$0.05</td></tr>
									<tr><td>El Salvador</td><td>$0.25</td></tr>
									<tr><td>El Salvador (Cellular)</td><td>$0.27</td></tr>
									<tr><td>Equatorial Guinea</td><td>$0.48</td></tr>
									<tr><td>Eritrea</td><td>$0.4</td></tr>
									<tr><td>Estonia</td><td>$0.02</td></tr>
									<tr><td>Estonia (Cellular)</td><td>$0.51</td></tr>
									<tr><td>Ethiopia</td><td>$0.14</td></tr>
									<tr><td>Ethiopia (Cellular)</td><td>$0.14</td></tr>
									<tr id="f"><td>Faroe Islands</td><td>$0.1</td></tr>
									<tr><td>Faroe Islands (Cellular)</td><td>$0.21</td></tr>
									<tr><td>Fiji</td><td>$0.3</td></tr>
									<tr><td>Fiji (Cellular)</td><td>$0.3</td></tr>
									<tr><td>Finland</td><td>$0.07</td></tr>
									<tr><td>Finland (Cellular)</td><td>$0.04</td></tr>
									<tr><td>France</td><td>$0.02</td></tr>
									<tr><td>France (Cellular)</td><td>$0.04</td></tr>
									<tr><td>French Guiana</td><td>$0.03</td></tr>
									<tr><td>French Guiana (Cellular)</td><td>$0.03</td></tr>
									<tr><td>French Polynesia</td><td>$0.26</td></tr>
									<tr><td>French Polynesia (Cellular)</td><td>$0.35</td></tr>
									<tr id="g"><td>Gabon</td><td>$0.69</td></tr>
									<tr><td>Gabon (Cellular)</td><td>$0.85</td></tr>
									<tr><td>Gambia</td><td>$0.67</td></tr>
									<tr><td>Gambia (Cellular)</td><td>$0.67</td></tr>
									<tr><td>Georgia</td><td>$0.2</td></tr>
									<tr><td>Georgia (Cellular)</td><td>$0.2</td></tr>
									<tr><td>Germany</td><td>$0.02</td></tr>
									<tr><td>Germany (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Ghana</td><td>$0.29</td></tr>
									<tr><td>Ghana (Cellular)</td><td>$0.29</td></tr>
									<tr><td>Gibraltar</td><td>$0.05</td></tr>
									<tr><td>Gibraltar (Cellular)</td><td>$0.21</td></tr>
									<tr><td>Greece</td><td>$0.02</td></tr>
									<tr><td>Greece (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Greenland</td><td>$0.58</td></tr>
									<tr><td>Greenland (Cellular)</td><td>$0.59</td></tr>
									<tr><td>Grenada</td><td>$0.4</td></tr>
									<tr><td>Guadeloupe</td><td>$0.03</td></tr>
									<tr><td>Guadeloupe (Cellular)</td><td>$0.08</td></tr>
									<tr><td>Guam</td><td>$0.02</td></tr>
									<tr><td>Guatemala</td><td>$0.15</td></tr>
									<tr><td>Guatemala (Cellular)</td><td>$0.16</td></tr>
									<tr><td>Guinea</td><td>$0.71</td></tr>
									<tr><td>Guinea (Cellular)</td><td>$0.48</td></tr>
									<tr><td>Guyana</td><td>$0.39</td></tr>
									<tr><td>Guyana (Cellular)</td><td>$0.39</td></tr>
									<tr id="h"><td>Haiti</td><td>$0.27</td></tr>
									<tr><td>Haiti (Cellular)</td><td>$0.41</td></tr>
									<tr><td>Honduras</td><td>$0.2</td></tr>
									<tr><td>Honduras (Cellular)</td><td>$0.22</td></tr>
									<tr><td>Hong Kong</td><td>$0.03</td></tr>
									<tr><td>Hong Kong (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Hungary</td><td>$0.02</td></tr>
									<tr><td>Hungary (Cellular)</td><td>$0.06</td></tr>
									<tr id="i"><td>Iceland</td><td>$0.03</td></tr>
									<tr><td>Iceland (Cellular)</td><td>$0.04</td></tr>
									<tr><td>India</td><td>$0.02</td></tr>
									<tr><td>Indonesia</td><td>$0.05</td></tr>
									<tr><td>Indonesia (Cellular)</td><td>$0.07</td></tr>
									<tr><td>Indonesia (Jakarta)</td><td>$0.05</td></tr>
									<tr><td>Iran</td><td>$0.08</td></tr>
									<tr><td>Iran (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Iraq</td><td>$0.21</td></tr>
									<tr><td>Iraq (Cellular)</td><td>$0.2</td></tr>
									<tr><td>Ireland</td><td>$0.02</td></tr>
									<tr><td>Ireland (Cellular)</td><td>$0.06</td></tr>
									<tr><td>Israel</td><td>$0.02</td></tr>
									<tr><td>Israel (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Israel (Palestine Cellular)</td><td>$0.28</td></tr>
									<tr><td>Italy</td><td>$0.02</td></tr>
									<tr><td>Italy (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Ivory Coast</td><td>$0.44</td></tr>
									<tr><td>Ivory Coast (Cellular)</td><td>$0.4</td></tr>
									<tr id="j"><td>Jamaica</td><td>$0.27</td></tr>
									<tr><td>Japan</td><td>$0.03</td></tr>
									<tr><td>Japan (Cellular)</td><td>$0.07</td></tr>
									<tr><td>Jordan</td><td>$0.16</td></tr>
									<tr><td>Jordan (Cellular)</td><td>$0.24</td></tr>
									<tr id="k"><td>Kazakhstan</td><td>$0.06</td></tr>
									<tr><td>Kazakhstan (Cellular)</td><td>$0.12</td></tr>
									<tr><td>Kenya</td><td>$0.2</td></tr>
									<tr><td>Kenya (Cellular)</td><td>$0.24</td></tr>
									<tr><td>Korea - South</td><td>$0.02</td></tr>
									<tr><td>Korea - South (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Kuwait</td><td>$0.07</td></tr>
									<tr><td>Kuwait (Cellular)</td><td>$0.07</td></tr>
									<tr><td>Kyrgyzstan</td><td>$0.21</td></tr>
									<tr><td>Kyrgyzstan (Cellular)</td><td>$0.24</td></tr>
									<tr id="l"><td>Laos</td><td>$0.13</td></tr>
									<tr><td>Laos (Cellular)</td><td>$0.13</td></tr>
									<tr><td>Latvia</td><td>$0.31</td></tr>
									<tr><td>Latvia (Cellular)</td><td>$0.53</td></tr>
									<tr><td>Lebanon</td><td>$0.13</td></tr>
									<tr><td>Lebanon (Cellular)</td><td>$0.25</td></tr>
									<tr><td>Lesotho</td><td>$0.4</td></tr>
									<tr><td>Lesotho (Cellular)</td><td>$0.37</td></tr>
									<tr><td>Liberia</td><td>$0.6</td></tr>
									<tr><td>Liberia (Cellular)</td><td>$0.74</td></tr>
									<tr><td>Libya</td><td>$0.3</td></tr>
									<tr><td>Libya (Cellular)</td><td>$0.25</td></tr>
									<tr><td>Liechtenstein</td><td>$0.11</td></tr>
									<tr><td>Liechtenstein (Cellular)</td><td>$0.16</td></tr>
									<tr><td>Lithuania</td><td>$0.25</td></tr>
									<tr><td>Lithuania (Cellular)</td><td>$0.34</td></tr>
									<tr><td>Luxembourg</td><td>$0.02</td></tr>
									<tr><td>Luxembourg (Cellular)</td><td>$0.03</td></tr>
									<tr id="m"><td>Macau</td><td>$0.1</td></tr>
									<tr><td>Macau (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Macedonia</td><td>$0.22</td></tr>
									<tr><td>Macedonia (Cellular)</td><td>$0.7</td></tr>
									<tr><td>Madagascar</td><td>$0.74</td></tr>
									<tr><td>Madagascar (Cellular)</td><td>$0.66</td></tr>
									<tr><td>Malawi</td><td>$0.36</td></tr>
									<tr><td>Malawi (Cellular)</td><td>$0.32</td></tr>
									<tr><td>Malaysia</td><td>$0.03</td></tr>
									<tr><td>Malaysia (Cellular)</td><td>$0.05</td></tr>
									<tr><td>Mali</td><td>$0.47</td></tr>
									<tr><td>Mali (Cellular)</td><td>$0.6</td></tr>
									<tr><td>Malta</td><td>$0.03</td></tr>
									<tr><td>Malta (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Marshall Islands</td><td>$0.06</td></tr>
									<tr><td>Martinique</td><td>$0.03</td></tr>
									<tr><td>Martinique (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Mauritania</td><td>$0.73</td></tr>
									<tr><td>Mauritania (Cellular)</td><td>$0.61</td></tr>
									<tr><td>Mauritius</td><td>$0.11</td></tr>
									<tr><td>Mauritius (Cellular)</td><td>$0.11</td></tr>
									<tr><td>Mexico</td><td>$0.01</td></tr>
									<tr><td>Mexico (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Micronesia</td><td>$0.47</td></tr>
									<tr><td>Moldova</td><td>$0.44</td></tr>
									<tr><td>Moldova (Cellular)</td><td>$0.41</td></tr>
									<tr><td>Monaco</td><td>$0.13</td></tr>
									<tr><td>Monaco (Cellular)</td><td>$0.45</td></tr>
									<tr><td>Mongolia</td><td>$0.03</td></tr>
									<tr><td>Montenegro</td><td>$0.23</td></tr>
									<tr><td>Montenegro (Cellular)</td><td>$0.64</td></tr>
									<tr><td>Montserrat</td><td>$0.44</td></tr>
									<tr><td>Morocco</td><td>$0.02</td></tr>
									<tr><td>Morocco (Cellular)</td><td>$0.5</td></tr>
									<tr><td>Mozambique</td><td>$0.08</td></tr>
									<tr><td>Mozambique (Cellular)</td><td>$0.16</td></tr>
									<tr><td>Myanmar</td><td>$0.08</td></tr>
									<tr><td>Myanmar (Cellular)</td><td>$0.08</td></tr>
									<tr id="n"><td>Namibia</td><td>$0.06</td></tr>
									<tr><td>Namibia (Cellular)</td><td>$0.08</td></tr>
									<tr><td>Nepal</td><td>$0.16</td></tr>
									<tr><td>Nepal (Cellular)</td><td>$0.21</td></tr>
									<tr><td>Netherlands</td><td>$0.02</td></tr>
									<tr><td>Netherlands (Cellular)</td><td>$0.04</td></tr>
									<tr><td>Netherlands Antilles</td><td>$0.06</td></tr>
									<tr><td>New Caledonia</td><td>$0.2</td></tr>
									<tr><td>New Caledonia (Cellular)</td><td>$0.2</td></tr>
									<tr><td>New Zealand</td><td>$0.02</td></tr>
									<tr><td>New Zealand (Cellular)</td><td>$0.06</td></tr>
									<tr><td>Nicaragua</td><td>$0.24</td></tr>
									<tr><td>Nicaragua (Cellular)</td><td>$0.25</td></tr>
									<tr><td>Nigeria</td><td>$0.11</td></tr>
									<tr><td>Niger (Cellular)</td><td>$0.47</td></tr>
									<tr><td>Norway</td><td>$0.03</td></tr>
									<tr><td>Norway (Cellular)</td><td>$0.03</td></tr>
									<tr id="o"><td>Oman</td><td>$0.19</td></tr>
									<tr><td>Oman (Cellular)</td><td>$0.35</td></tr>
									<tr id="p"><td>Pakistan</td><td>$0.09</td></tr>
									<tr><td>Pakistan (Cellular)</td><td>$0.09</td></tr>
									<tr><td>Palau</td><td>$0.4</td></tr>
									<tr><td>Palestine</td><td>$0.25</td></tr>
									<tr><td>Palestine (Cellular)</td><td>$0.28</td></tr>
									<tr><td>Panama</td><td>$0.03</td></tr>
									<tr><td>Panama (Cellular)</td><td>$0.16</td></tr>
									<tr><td>Papua New Guinea</td><td>$0.82</td></tr>
									<tr><td>Paraguay</td><td>$0.04</td></tr>
									<tr><td>Paraguay (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Peru</td><td>$0.02</td></tr>
									<tr><td>Peru (Cellular)</td><td>$0.04</td></tr>
									<tr><td>Peru Rural</td><td>$0.22</td></tr>
									<tr><td>Philippines</td><td>$0.12</td></tr>
									<tr><td>Philippines (Cellular)</td><td>$0.14</td></tr>
									<tr><td>Philippines (Cellular-D)</td><td>$0.16</td></tr>
									<tr><td>Philippines (Cellular-G)</td><td>$0.13</td></tr>
									<tr><td>Philippines (Cellular-S)</td><td>$0.16</td></tr>
									<tr><td>Poland</td><td>$0.02</td></tr>
									<tr><td>Poland (Cellular)</td><td>$0.04</td></tr>
									<tr><td>Portugal</td><td>$0.03</td></tr>
									<tr><td>Portugal (Cellular)</td><td>$0.06</td></tr>
									<tr id="q"><td>Qatar</td><td>$0.24</td></tr>
									<tr><td>Qatar (Cellular)</td><td>$0.27</td></tr>
									<tr id="r"><td>Reunion</td><td>$0.03</td></tr>
									<tr><td>Reunion (Cellular)</td><td>$0.18</td></tr>
									<tr><td>Romania</td><td>$0.03</td></tr>
									<tr><td>Romania (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Russia</td><td>$0.07</td></tr>
									<tr><td>Russia (Cellular)</td><td>$0.08</td></tr>
									<tr><td>Rwanda</td><td>$0.28</td></tr>
									<tr><td>Rwanda (Cellular)</td><td>$0.28</td></tr>
									<tr id="s"><td>San Marino</td><td>$0.04</td></tr>
									<tr><td>Saudi Arabia</td><td>$0.12</td></tr>
									<tr><td>Saudi Arabia (Cellular)</td><td>$0.18</td></tr>
									<tr><td>Senegal</td><td>$0.38</td></tr>
									<tr><td>Senegal (Cellular)</td><td>$0.38</td></tr>
									<tr><td>Serbia</td><td>$0.21</td></tr>
									<tr><td>Serbia (Cellular)</td><td>$0.51</td></tr>
									<tr><td>Seychelles</td><td>$0.57</td></tr>
									<tr><td>Seychelles (Cellular)</td><td>$0.57</td></tr>
									<tr><td>Sierra Leone</td><td>$0.79</td></tr>
									<tr><td>Sierra Leone (Cellular)</td><td>$0.79</td></tr>
									<tr><td>Singapore</td><td>$0.02</td></tr>
									<tr><td>Singapore (Cellular)</td><td>$0.02</td></tr>
									<tr><td>Slovak (Cellular)</td><td>$0.06</td></tr>
									<tr><td>Slovak Republic</td><td>$0.03</td></tr>
									<tr><td>Slovenia</td><td>$0.24</td></tr>
									<tr><td>Slovenia (Cellular)</td><td>$0.56</td></tr>
									<tr><td>Somalia</td><td>$0.71</td></tr>
									<tr><td>South Africa</td><td>$0.05</td></tr>
									<tr><td>South Africa (Cellular)</td><td>$0.05</td></tr>
									<tr><td>South Sudan</td><td>$0.34</td></tr>
									<tr><td>Spain</td><td>$0.02</td></tr>
									<tr><td>Spain (Cellular)</td><td>$0.1</td></tr>
									<tr><td>Sri Lanka</td><td>$0.24</td></tr>
									<tr><td>Sri Lanka (Cellular)</td><td>$0.24</td></tr>
									<tr><td>St. Kitts & Nevis</td><td>$0.39</td></tr>
									<tr><td>St. Lucia</td><td>$0.37</td></tr>
									<tr><td>St. Pierre</td><td>$0.32</td></tr>
									<tr><td>St. Vincent</td><td>$0.37</td></tr>
									<tr><td>Sudan</td><td>$0.27</td></tr>
									<tr><td>Suriname</td><td>$0.18</td></tr>
									<tr><td>Suriname (Cellular)</td><td>$0.45</td></tr>
									<tr><td>Swaziland</td><td>$0.05</td></tr>
									<tr><td>Swaziland (Cellular)</td><td>$0.24</td></tr>
									<tr><td>Sweden</td><td>$0.02</td></tr>
									<tr><td>Sweden (Cellular)</td><td>$0.03</td></tr>
									<tr><td>Switzerland</td><td>$0.02</td></tr>
									<tr><td>Switzerland (Cellular)</td><td>$0.48</td></tr>
									<tr><td>Syria</td><td>$0.09</td></tr>
									<tr><td>Syria (Cellular)</td><td>$0.09</td></tr>
									<tr id="t"><td>Taiwan</td><td>$0.02</td></tr>
									<tr><td>Taiwan (Cellular)</td><td>$0.14</td></tr>
									<tr><td>Tajikistan</td><td>$0.19</td></tr>
									<tr><td>Tajikistan (Cellular)</td><td>$0.19</td></tr>
									<tr><td>Tanzania</td><td>$0.18</td></tr>
									<tr><td>Tanzania (Cellular)</td><td>$0.18</td></tr>
									<tr><td>Thailand</td><td>$0.02</td></tr>
									<tr><td>Thailand (Cellular)</td><td>$0.06</td></tr>
									<tr><td>Togo</td><td>$0.42</td></tr>
									<tr><td>Togo (Cellular)</td><td>$0.33</td></tr>
									<tr><td>Trinidad & Tobago</td><td>$0.33</td></tr>
									<tr><td>Tunisia</td><td>$0.67</td></tr>
									<tr><td>Tunisia (Cellular)</td><td>$0.72</td></tr>
									<tr><td>Turkey</td><td>$0.04</td></tr>
									<tr><td>Turkey (Cellular)</td><td>$0.04</td></tr>
									<tr><td>Turkmenistan</td><td>$0.21</td></tr>
									<tr><td>Turkmenistan (Cellular)</td><td>$0.21</td></tr>
									<tr><td>Turks & Caicos Islands</td><td>$0.4</td></tr>
									<tr id="u"><td>Uganda</td><td>$0.37</td></tr>
									<tr><td>Uganda (Cellular)</td><td>$0.5</td></tr>
									<tr><td>UK</td><td>$0.02</td></tr>
									<tr><td>UK - Personal Numbers</td><td>$0.27</td></tr>
									<tr><td>UK (Cellular Other)</td><td>$0.27</td></tr>
									<tr><td>UK (Cellular)</td><td>$0.02</td></tr>
									<tr><td>UK NGN</td><td>$0.27</td></tr>
									<tr><td>UK NGN Other</td><td>$0.15</td></tr>
									<tr><td>UK Other</td><td>$0.02</td></tr>
									<tr><td>Ukraine</td><td>$0.18</td></tr>
									<tr><td>Ukraine (Cellular)</td><td>$0.28</td></tr>
									<tr><td>United Arab Emirates</td><td>$0.28</td></tr>
									<tr><td>United Arab Emirates (Cellular)</td><td>$0.19</td></tr>
									<tr><td>Uruguay</td><td>$0.08</td></tr>
									<tr><td>Uruguay (Cellular)</td><td>$0.13</td></tr>
									<tr><td>USA - Alaska</td><td>$0.04</td></tr>
									<tr><td>USA - Puerto Rico</td><td>$0.02</td></tr>
									<tr><td>USA Virgin Islands</td><td>$0.03</td></tr>
									<tr><td>USA/Canada</td><td>$0.02</td></tr>
									<tr><td>Uzbekistan</td><td>$0.08</td></tr>
									<tr><td>Uzbekistan (Cellular)</td><td>$0.08</td></tr>
									<tr id="v"><td>Venezuela</td><td>$0.02</td></tr>
									<tr><td>Venezuela (Cellular)</td><td>$0.05</td></tr>
									<tr><td>Vietnam</td><td>$0.08</td></tr>
									<tr><td>Vietnam (Cellular)</td><td>$0.09</td></tr>
									<tr id="w"><td>Wallis & Futuna</td><td>$0.44</td></tr>
									<tr id="y"><td>Yemen</td><td>$0.21</td></tr>
									<tr><td>Yemen (Cellular)</td><td>$0.21</td></tr>
									<tr id="z"><td>Zambia</td><td>$0.12</td></tr>
									<tr><td>Zambia (Cellular)</td><td>$0.28</td></tr>
									<tr><td>Zimbabwe</td><td>$0.14</td></tr>
									<tr><td>Zimbabwe (Cellular)</td><td>$0.32</td></tr>

								</table>
							</div>
						</div>
-->
						<div class="spacer30"></div>
						<div class="spacer30"></div>
						<div class="spacer30"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- flag selector css -->
	<!-- Load jQuery from CDN so can run demo immediately -->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	-->
	<script src="country_flag_selector/js/countrySelect.js"></script>
	<script>
		function _displayRate(country_code){
			$.ajax({
		        type:'GET',
		        url:'functions?action=getRate&country_code=' + country_code,
		        success: function(data) 
	            {	
	            	var _data = JSON.parse(data);
	            	var rate_html = "";
	            	var rate = "";
	            	var country_name = "";
	            	if(_data != null){
	            		rate_html += "<h3>Owtel App Rate:</h3>"
		            	for (var i = 0; i < _data.length; i++) {
			            	$.each(_data[i], function(index, value){
			            		if(index == 'country_name'){
			            			country_name = value;
			            		}
			            		if(index == 'rate'){
			            			rate = value;			            			
			            		}
			            	});
			            	
			            	rate_html += "<span class='bold'>"+ country_name +"</span>:<span> " + rate + "₵</span><br>";
		            	};

		            	if(country_code == 'us' || country_code == 'ca'){
							rate_html +="<span class='bold'>SMS Free</span>";
		            	}else{
		            		rate_html +="<span class='bold'>SMS Not Available.</span>"
		            	}
			            $('div#rate').html(rate_html);
		            	$('div#rate').css('display','block');
			        }else{
			        	$('div#rate').html("<span>Not Available.</span>");
		            	$('div#rate').css('display','block');
			        }
	            }
		    });
		}
		$("#country_selector").countrySelect({
			defaultCountry: "US",
			//onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
			//preferredCountries: ['ca', 'gb', 'us']
		});

		$('#country_selector').change(function(){

			var country_code = $('#country_selector_code').val();
			if(country_code.length > 0){
				_displayRate(country_code);
			}
		});

		$('#top_country .country-select').on('click', function(){
			var country_code = $(this).find("input").val();
				_displayRate(country_code);
				var a = $("#ddlFlag").attr('class'); 
				$("#ddlFlag").removeClass(a);
				$("#ddlFlag").addClass("flag "+country_code);
				$('#country_selector').val($(this).find("span.country_name").text());
		});
		
	</script>
<!-- end flag selector css -->
<?php require_once('footer-2.php'); ?>