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
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Assassine',
		2	=> 'Kantor',
		3	=> 'Kleriker',
		4	=> 'Gladiator',
		5	=> 'Jäger',
		6	=> 'Zauberer',
		7	=> 'Beschwörer',
		8	=> 'Templer',
		9	=> 'Schütze',
		10	=> 'Barde',
		11	=> 'Äthertech',
	),
	'races' => array(
		0	=> 'Unbekannt',
		1	=> 'Elyoss',
		2	=> 'Asmodier'
	),
	'lang' => array(
		'aion'						=> 'Aion',
		'plate'						=> 'Platte',
		'cloth'						=> 'Stoff',
		'leather'					=> 'Leder',
		'mail'						=> 'Schwere Rüstung',
		
		// Profile information
		'uc_gender'					=> 'Geschlecht',
		'uc_male'					=> 'Männlich',
		'uc_female'					=> 'Weiblich',
		'uc_guild'					=> 'Gilde',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Aion Einstellungen',
		'uc_faction'				=> 'Fraktion',
		'uc_faction_help'			=> 'Wähle die Standard-Fraktion',
	),
);

?>