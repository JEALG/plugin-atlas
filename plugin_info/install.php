<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

function atlas_install() {
	$eqLogic = atlas::byLogicalId('atlas', 'wifi');
	if (!is_object($eqLogic)) {
		message::add('atlas','installation du Wifi');
		$eqLogic = new atlas();
		$eqLogic->setLogicalId('wifi');
		$eqLogic->setCategory('multimedia', 1);
		$eqLogic->setName('Wifi');
		$eqLogic->setEqType_name('atlas');
		$eqLogic->setIsVisible(1);
		$eqLogic->setIsEnable(1);
		$eqLogic->save();
	}
    foreach (eqLogic::byType('atlas') as $atlas) {
        $atlas->save();
    }
}

function atlas_update() {
	$eqLogic = atlas::byLogicalId('atlas', 'wifi');
	if (!is_object($eqLogic)) {
		message::add('atlas','mise a jour du Wifi');
		$eqLogic = new atlas();
		$eqLogic->setLogicalId('wifi');
		$eqLogic->setCategory('multimedia', 1);
		$eqLogic->setName('Wifi');
		$eqLogic->setEqType_name('atlas');
		$eqLogic->setIsVisible(1);
		$eqLogic->setIsEnable(1);
		$eqLogic->save();
	}
    	foreach (eqLogic::byType('atlas') as $atlas) {
		$atlas->save();
    	}
}

?>
