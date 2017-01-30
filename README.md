## A Slightly Nicer BrewPi UI

This fork of the BrewPi UI removes any configuration options from the index.php file, so you can share the link with anyone who is interested in checking it out and mainting the normal functions in the admin.php page.

There are also a few style and HTML tweaks to make the page responsive and look better on mobile.

### Creaing New Users

The password protection sript lookings for the file 'users.php' in the includes folder. Create that file, add this code to it and change it to use your username and password combonation. Can add as many users as you like if nessecary.

	<?php
	
	$LOGIN_INFORMATION = array(
	'username1' => 'password1',
      'username2' => 'password2',
      'username3' => 'password3'
	);
	
	?>

It is currently not the strongest method, but it is easy to install and quick.

