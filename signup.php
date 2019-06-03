<?php
	require "header.php"
?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Sign Up</h1>
			<?php
				if (isset($_GET['error'])) {
					if ($_GET['error'] == 'emptyfields') {
						echo '<p class="signup-error">Please, fill in all fields.</p>';
					}
					else if ($_GET['error'] == 'invalidemailuid') {
						echo '<p class="signup-error">Please, check your username and email again.</p>';
					}
					else if ($_GET['error'] == 'invalidemail') {
						echo '<p class="signup-error">Invalid email</p>';
					}
					else if ($_GET['error'] == 'invaliduid') {
						echo '<p class="signup-error">Invalid username</p>';
					}
					else if ($_GET['error'] == 'passwordcheck') {
						echo '<p class="signup-error">Please, check your password again.</p>';
					}
					else if ($_GET['error'] == 'sqlerror') {
						echo '<p class="signup-error">Detected bad hackers.</p>';
					}
					else if ($_GET['error'] == 'usertaken') {
						echo '<p class="signup-error">The username is already taken.</p>';
					}
				}
				else if ($_GET['signup'] == 'success') {
					echo '<p class="signup-success">Signed up successfully!</p>';
				}
			?>
			<form class="form-signup" action="includes/signup-inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<button type="submit" name="signup-submit">Sign Up</button>
			</form>
		</section>
	</div>
</main>


<?php
	require "footer.php"
?>
