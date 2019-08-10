<body>
	<div class="container">
		
		<form id="formregister" action="<?php echo base_url();?>register/registeraction" method="POST">	
		    <div>
		        <h3>Account</h3>
		        <section>
		            <label for="email">Email *</label>
		            <input id="email" name="email" type="text" class="required email">
		            <label for="password">Password *</label>
		            <input id="password" name="password" type="password" class="required">
		            <label for="confirm">Confirm Password *</label>
		            <input id="confirm" name="confirm" type="password" class="required">
		            <p>(*) Mandatory</p>
		        </section>
		        <h3>Profile</h3>
		        <section>
		            <label for="name">First name *</label>
		            <input id="name" name="fname" type="text" class="required">
		            <label for="surname">Last name *</label>
		            <input id="surname" name="lname" type="text" class="required">
		            
		            <label for="address">Address</label>
		            <input id="address" name="address" type="text">

		            <label for="dob">Date Of Birth*</label>
		            <input id="dob" name="dob" type="date" class="form-control" required>

		            <label for="memtype">Membership Type*</label>
		            <input id="memtype" name="memtype" type="text" class="required" >
		            <p>(*) Mandatory</p>
		        </section>
		        <h3>Credit Card</h3>
		        <section>
		            <label for="cc">CC Number*</label>
		            <input id="cc" type="text" name="ccnumber" class="" maxlength="16" minlength="16" required>
		            <label for="cctype">CC Type*</label>
		            <input id="cctype" type="text" name="cctype" class="required" readonly value="">

		            <label for="expdate">Expire Date*</label>
		            <input class="form-control input-sm" type="text" name="ccdate" style="width:100px" placeholder="mm/yy" required>
		        </section>
		        <h3>Finish</h3>
		        <section>
		            <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms" style="font-weight: bold;">I agree with the Terms and Conditions.</label>
		        </section>
		    </div>
		</form>
	</div>

