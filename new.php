<div class="well">
	<form class="form-horizontal" name="register" method="POST" action="site.php">
		<h3>Your Personal Details</h3>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="First Name" name="prenom">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Last Name" name="nom">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Email" name="email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Password" name="mdp">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="inputEmail">phone number <sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Email" name="phone">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <p>
		    <input type="date" name="datenaissance">
		  </p>
		</div>
	  </div>
		<div>
          <h3>Your Billing Details</h3>
          <div class="control-group">
            <label class="control-label">region<sup>*</sup></label>
            <div class="controls">
              <input type="text" placeholder="Region" name="region">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">address <sup>*</sup></label>
            <div class="controls">
              <input type="text" placeholder=" Address" name="adresse">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">postal code<sup>*</sup></label>
            <div class="controls">
              <input type="text" placeholder=" Postal code" name="postalcode">
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <input type="submit" name="submitAccount2" value="Register" class="shopBtn exclusive">
            </div>
        </div>
        </div>
	<div class="control-group">
		<div class="controls"></div>
	</div>
	</form>
</div>