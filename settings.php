<?php

OCP\User::checkAdminUser();

OCP\Util::addScript( "akmetadata", "admin" );

$tmpl = new OCP\Template( 'akmetadata', 'settings');

$tmpl->assign('url', OCP\Config::getSystemValue( "somesetting", '' ));

return $tmpl->fetchPage();
