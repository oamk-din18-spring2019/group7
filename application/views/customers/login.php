<?php echo validation_errors(); ?>

<?php echo form_open('customers/login'); ?>

    <!-- Login part -->
<p>
	<style type="text/css">
		#body{margin:10px auto; width: 800px; font-size: 90%; }
		form {width: 600px; margin: 40 auto;}
		form div{padding: 0 0 5px 0;}
		label {width: 120px; display: block; float: left; clear: left; font-weight: bold;}
		span.error p{width: auto; padding: 0 0 0 120px; font-style: italic; color: red; font-size: 90%;}
		span.success {color: green;}
		.form{ width: 150px;}
	</style>
	<meta charset="utf-8">
	<title>Login</title>
</p>
<body>
	<div id="body">
		<h2>Login to your account</h2>
		<form action="<?php echo base_url()."customers/login/" ?>" method="post" id="form">
			<fieldset>
				<legend>Login</legend>
				<div><span class="success"><?php if(isset($b_Check) && $b_Check == false){echo "Wrong username or password, Please type again!";}?></span></div>
				<div>
					<label for="username">Username</label>
					<input class="form" type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
					<span class="error"><?php echo form_error('username'); ?></span>
				</div>
				<div>
					<label for="password">Password</label>
					<input class="form" name="password" type="password" value="<?php echo set_value('password'); ?>" size="50" />
					<span class="error"><?php echo form_error('password'); ?></span>
				</div>

            <!-- Submit button -->    
			<input type="submit" id="save" value="Log in" />
			</fieldset>
		</form>
