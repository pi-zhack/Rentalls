<?php echo form_open('register/add', array('class' => 'login', 'id' => 'login_form') ); ?>
			<h4>Registerion for an account on Rentalls.</h4>
			<fieldset>
				<legend>Personal Information</legend>
				
				<p><label>Register as:</label></p>
				<p><input type="checkbox" name="iscustomer" value="Customer" id="iscustomer"> <label for="iscustomer">Customer</label>&nbsp;&nbsp;&nbsp; <input type="checkbox" name="ismerchant" value="Merchant"  id="ismerchant"> <label for="ismerchant">Merchant</label></p>
				
				<p><label for="fname">First Name</label></p>
				<p><input type="text" name="fname"></p>
				
				<p><label for="mname">Middle Name</label></p>
				<p><input type="text" name="mname" ></p>
				
				<p><label for="lname">Last Name</label></p>
				<p><input type="text" name="lname"></p>
				
				<p><label for="email">Email</label></p>
				<p><input type="text" name="email"></p>
				
				<p><label for="mnum">Mobile Number</label></p>
				<p><input type="text" name="mnum" ></p>
				
				<p><label for="gender">Gender</label></p>
				<p>
					<select name="gender">
						<option value="--">--</option >
						<option value="Male">Male</option >
						<option value="Female">Female</option >					
					</select>
				</p>
			
			</fieldset>	
			<fieldset>
				<legend>Address</legend>
				
				<p><label for="stadd1">Street Address 1</label></p>
				<p><input type="text" name="stadd1"></p>
				
				<p><label for="stadd2">Street Address 2</label></p>
				<p><input type="text" name="stadd2"></p>

				<p><label for="zip">ZIP / Postal Code</label></p>
				<p><input type="text" name="zip"></p>
				
				<p><label for="city">City</label></p>
				<p><input type="text" name="city"></p>
				
				<p><label for="state">State</label></p>
				<p><input type="text" name="city"></p>
				
				<p><label for="country">Country</label></p>
				<p><input type="text" name="city"></p>
				
				<p><label for="pnum">Phone Number</label></p>
				<p><input type="text" name="city"></p>
								
			</fieldset>
			<fieldset>
				<legend>Account Information</legend>
				
				<p><label for="username">Username</label></p>
				<p><input type="text" name="username"></p>
				
				<p><label for="password">Password</label></p>
				<p><input type="password" name="password"></p>
				
				<p><label for="repassword">Re-enter your password</label></p>
				<p><input type="text" name="username"></p>
				
			</fieldset>
			
				<b>By clicking "Submit" I agree that:</b>
				<ul>
					<li>I have read and accepted the User Agreement and Privacy Policy.</li>
					<li>I may receive communications from Rentalls and can change my notification preferences in My Account.</li>
					<li>I am at least 18 years old.</li>
				</ul>

			<p><input type="submit" name="submit" class="submit" value="Submit" /></p>
<?php echo form_close(); ?>