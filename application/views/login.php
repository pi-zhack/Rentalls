<?php echo form_open('login/validate_credentials', array('class' => 'login', 'id' => 'login_form') ); ?>
			<?php if(isset($_GET['fail']) && $_GET['fail'] == 1): ?><p style="color:#ff0000">Incorrect Username or Password</p><?php endif; ?>
			<h4>Login Form</h4>
			<input type="text" name="username" class="username" value="Username" onblur="if (this.value == ''){this.value = 'Username';}" onfocus="if (this.value == 'Username') {this.value = '';}"/>
			<input type="password" name="password" class="password" value="Password" onblur="if (this.value == ''){this.value = 'Password';}" onfocus="if (this.value == 'Password') {this.value = '';}"/>
			<input type="submit" name="submit" class="submit" value="Log in" />
<?php echo form_close(); ?>