<?php
/**
 * Copyright (c) 2014, Lukas Reschke <lukas@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

/** @var $this \OCP\Route\IRouter */
$this->create('akmetadata_index', '/')
	->actionInclude('akmetadata/index.php');
$this->create('akmetadata_ajax_seturl', 'ajax/seturl.php')
	->actionInclude('akmetadata/ajax/seturl.php');
