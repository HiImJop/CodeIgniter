<?php include('headfoot/header.php'); ?>
<div class="container">
<article>
		<section>
			<header>
				<title>reservation here!</title>
			</header>
			<div class="bContent"></div>
			
				<div class="content">
				<h3>Rules for reservation</h3>	
				
					<p>1. Reservation must be made at least three (3) days before scheduled departure.<br/>
						2. Approved reservation must be claimed and paid at least 48 hours before scheduled departure.<br/>
						3. Registered usser may reserve ticket for other passengers.<br/>
						4. All reservation are tentative unless tickets are purchased.<br/>
						5. A maximum of Php 25 per ticket as servie fee when purchased outside the corporate ticket office.</p>
				</div>
		</section>
	</article>
	<div class="boxReserve"></div>
		<div class="boxRContent">
			<h3>Reservation</h3>
                        <form method="post" action="<?php echo base_url();?>index.php/siteController/add_reservation">
                          
					<table>
					<th><label name="travel">Travel type</label></th>
						<tr>
							<td><input type="radio" required name="transtype" value="R"/></td>
							<td><label name="round">Round Trip</label></td>
						</tr>
						<tr>
							<td><input type="radio" required name="transtype"  value="O"/></td>
							<td><label name="one">One Way</label></td>
						</tr>
						<tr>
							<td><label name="orig">Orgin</label></td>
						</tr>
						<tr>
							<td>
							<select name="origin" >
								<option value="">Origin</option>
								<option value="Cebu">Cebu</option>
								<option value="Bohol">Bohol</option>
								<option value="Leyte">Leyte</option>
								<option value="Negros">Negros</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><label name="destination">Destination</label></td>
						</tr>
							<tr>
							<td>
							<select name="destination" required>
								<option value="">Destination</option>
								<option value="Cebu">Cebu</option>
								<option value="Bohol">Bohol</option>
								<option value="Leyte">Leyte</option>
								<option value="Negros">Negros</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><label name="depDate">Departure Date</label></td>
						</tr>
						<tr>
							<td>
							<select name="departDate" required>
								<option value="">Departure Date</option>
								<option value="May 26, 2014">May 26, 2014</option>
								<option value="May 28, 2014">May 28, 2014</option>
								<option value="May 30, 2014">May 30, 2014</option>
								<option value="June 1, 2014">June 1, 2014</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><label name="fulname">Name</label></td>
						</tr>
						<tr>
                                                	<td><input type="text" required name="fname" PlaceHolder="Full Name"></td>
						</tr>
						<tr>
							<td><label name="addr">Address</label></td>
						</tr>
						<tr>
							<td><input type="text" required name="adr" PlaceHolder="Full address"/></td>
						</tr>
						<tr>
							<td><label name="contact">Contact</label></td>
						</tr>
						<tr>
							<td><input type="text" required name="contct" PlaceHolder="Contact Number"/></td>
						</tr>
						<tr>
							<td><label name="email">Email</label></td>
						</tr>
						<tr>
							<td><input type="text" name="emailAd" PlaceHolder="Email Address"/></td>
						</tr>
						<tr>
							<td><label name="trans">No. of Pax</label></td>
						</tr>
						<tr>
							<td>
								<input type="text" name="adult" required PlaceHolder="Adult"/>
							</td>
							<td><input type="text" name="child" required PlaceHolder="Child"/></td>
							
						</tr>
						<tr>
							<td><label name="accom">Accommodation</label></td>
						</tr>
						<tr>
							<td>
							<select name="accomType" required>
									<option value="">Accommodation Type</option>
									<option value="aircon">Aircon</option>
									<option value="regular">Regular</option>
									<option value="cabin">Cabin</option>
							</select>
							<input type="text" hidden value="Open" name="stat">
							</td>
						</tr>
					
						<tr>
							<td><button name="book">Book Now!</button></td>
							<td><button name="cancel">Cancel</button></td>
						</tr>
						
				</table>
      </div>
<?php include('headfoot/footer.php'); ?>