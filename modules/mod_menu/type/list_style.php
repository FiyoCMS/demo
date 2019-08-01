<?php
/**
* @name			Inline Menu
* @version		1.5.0
* @package		Fiyo CMS
* @copyright	Copyright (C) 2012 Fiyo CMS.
* @license		GNU/GPL, see LICENSE.txt
*/

defined('_FINDEX_') or die('Access Denied');
echo "<ul class=\"nav navbar-nav navbar-inline\">";	
$qr = DB::table(FDBPrefix."menu")->where("category='$category' AND status=1 AND parent_id=0 ".Level_Access)->orderBy("short ASC")->get();
$no = 1;
$sum = count($qr);	
foreach($qr as $menu) {
	$link = make_permalink($menu['link'],$menu['id']);

	if($sub_title==1) 
		$subtitle="<span>".$menu['sub_name']."</span>";
	else 
		$subtitle="";	
		
	if($menu['id']==Page_ID)
		$a=" active"; 
	else 
		$a="";
	if($no==1) $pos = ' first'; else if($no==$sum) $pos = ' last'; else $pos = '';
	if ($menu['home']==0){
		if ($menu['app']=="sperator"){
			echo "<li class=\"menu".$menu['class']."$a$pos\"><a href='#'>".$menu['name']."$subtitle</a>";
			if(_Mod_SubMenu_==1) sub_menu($menu['id']);
			echo "</li>";
		}
		elseif ($menu['app']=="link"){
			echo "<li class=\"menu".$menu['class']."$a$pos\" style=\"".$menu['style']."\"><a href=\"$link\">".$menu['name']."$subtitle</a>";
			if(_Mod_SubMenu_==1) sub_menu($menu['id']);
			echo "</li>";
		}
		else { 
			if(empty($menu['link'])) $menu['link']="#";

			$text = $menu['name'];
			if($menu['link'] == "?app=user") {
				if(USER)
				$text = "<i class='icon-user'></i> ". USER_NAME;
				else {
					$text = Login;
				}
			}
			echo "<li class=\"menu".$menu['class']."$a$pos\" style=\"".$menu['style']."\"><a href=\"$link\">".$text."$subtitle</a>";

			if($menu['link'] == "?app=user") {
				if(USER) {
					
					echo "<ul class=\"sub-menu\">";
					echo "<li class='menu'> <a href='".make_permalink("?app=user")."'> ".Edit_Profile."</a></li>";
					echo "<li class='menu'> <a href='".make_permalink("?app=user&view=logout")."'> ".Logout." </a></li>";
					echo "</ul>";
				}
				
			}

			if(_Mod_SubMenu_ == 1) sub_menu($menu['id']);
			echo "</li>";
		}				
	}
	else {	
		if(isHomePage()) 
			$b="active";
		else 
			$b="";		
			echo "<li class=\"menu".$menu['class']."$a$pos\" style=\"".$menu['style']."\"><a href=\"".FUrl."\">".$menu['name']."$subtitle</a>";
				if(_Mod_SubMenu_ == 1) sub_menu($menu['id']);
			echo "</li>";
		echo "</li>";
	}
	$no++;
}		
echo "</ul>";  