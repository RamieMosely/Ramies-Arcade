<?php

    //Render doctype
    echo '<!DOCTYPE html><html lang="en">';

    require('modules/head.php');

    //Rednecking the body
    require('modules/navbar.php');
    if( isset($_GET['page']) )
{
	switch($_GET['page'])
	{
		case'home':
			require('pages/home.php');
			break;
		case 'contact':
			require('pages/contact.php');
			break;
		case 'about':
			require('pages/about.php');
			break;
		default:
			require('pages/404.php');
	}
}
else
{
	require('pages/home.php');
}

    //Rendering the footer
    require('modules/footer.php');
    echo '</html>';

    
    
    
?>