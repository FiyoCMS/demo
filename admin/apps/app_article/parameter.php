<?php
/**
* @version		3.0
* @package		Fiyo CMS
* @copyright	Copyright (C) 2018 Fiyo CMS.
* @license		GNU/GPL, see LICENSE.
**/

//Router File
defined('_FINDEX_') or die('Access Denied');


//membuat parameter $app
$app = [
	'name'		=> 'Article',
	'table'		=> FDBPrefix.'article',
	'folder'	=> 'app_'.Input::get('app'),
	'root'		=> Input::get('app'),
	'index'		=> 'id'
];

