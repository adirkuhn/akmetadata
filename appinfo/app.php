<?php

/**
* AK-MetaData - search, edit and extract metadata from files
*
* @author Adir Kuhn <adirkuhn@gmail.com>
*/

OCP\App::registerAdmin( 'akmetadata', 'settings' );

OCP\App::addNavigationEntry( array( 
	'id' => 'akmetadata',
	'order' => 74,
	'href' => OCP\Util::linkTo( 'akmetadata', 'index.php' ),
	'icon' => OCP\Util::imagePath( 'akmetadata', 'example.png' ),
	'name' => 'AK MetaData'
));
