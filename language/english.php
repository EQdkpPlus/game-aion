<?php
/*	Project:	EQdkp-Plus
 *	Package:	AION game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Assassin',
		2	=> 'Chanter',
		3	=> 'Cleric',
		4	=> 'Gladiator',
		5	=> 'Ranger',
		6	=> 'Sorcerer',
		7	=> 'Spiritmaster',
		8	=> 'Templar',
		9	=> 'Gunslinger',
		10	=> 'Songweaver',
		11	=> 'Aethertech',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Elyoss',
		2	=> 'Asmodier'
	),
	'lang' => array(
		'aion'						=> 'Aion',
		'plate'						=> 'Plate',
		'cloth'						=> 'Cloth',
		'leather'					=> 'Leather',
		'mail'						=> 'Mail',
		
		// Profile information
		'uc_gender'					=> 'Gender',
		'uc_male'					=> 'Male',
		'uc_female'					=> 'Female',
		'uc_guild'					=> 'Guild',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Aion Settings',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'Select the default faction',
	),
);
?>