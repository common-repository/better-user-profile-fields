<?php
/*
Plugin Name: Better User Profile Fields
Plugin URI: http://www.edwardrjenkins.com/wordpress-plugins/better-user-profile-fields/
Description: Adds new user profile fields, including Facebook and Google+.
Version:1.0
Author: Edward R. Jenkins
Author URI: http://www.edwardrjenkins.com
License: GPL
*/
/*  Copyright 2013 Edward R. Jenkins - erjenkins1@gmail.com
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function cm_better_profile_fields($profile_fields) {
	$profile_fields['twitter'] = 'Twitter URL';
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['googleplus'] = 'Google+ URL';
	
	$profile_fields['linkedin'] = 'LinkedIn';
	$profile_fields['deviantart'] = 'Deviant Art';
	$profile_fields['tumblr'] = 'Tumblr';
	return $profile_fields;
}
add_filter('user_contactmethods', 'cm_better_profile_fields');
?>